<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Product;
use App\Mail\UserEmail;
use App\Category;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class SubCategoryController extends Controller
{

    public function index(){
        $category = SubCategory::all();
            return view('admin/subCategory/index', ['category' => $category]);
    }
    public function addData(){
        $catItem = Category::all();
        return view('admin/subCategory/addSubCategory', ['catItem' => $catItem]);
    }
    public function subCategoryView($id)
    {

        $Detail = SubCategory::where('id', $id)->get();
        return view('admin/subCategory/detailSubCategory',['Detail'=> $Detail]);
    }
    public function SubCategoryUpdate($id)
    {
        $update = SubCategory::where('id', $id)->get();
        return view('admin/subCategory/updateSubCategory',['update'=> $update]);
    }
    public function SubCategoryUpdates(Request $request)
    {
        $store =  SubCategory::where('id', $request->get('uderid'))->first();

        if( $request->hasFile('image1')){
            $fileImage = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$fileImage);
        }
        $store->image1 =$fileImage;
        $store->name=$request->get('name');
        $store->description=$request->get('description');
        $store->slug=$request->get('slug');

        $store->update();

        return back()->with('success','Data Updated successfully!');

    }
    public function AddSubCategory(Request $request){

        if( $request->hasFile('image1')){

            $filenames = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$filenames);
        }

        $categoryAdd = SubCategory::where('name', $request->get('name'))->first();
        if($categoryAdd == null){
            $addSt  = new SubCategory();

            $addSt->image1 =$filenames;
            $addSt->name=$request->get('name');
            $addSt->cat_id=$request->get('cat_id');
            $addSt->description=$request->get('description');
            $addSt->slug=$request->get('slug');
            $addSt->status='Active';
            $addSt->save();

            ActivityLogsController::insertLog("Add Store", $addSt->id, "addCategory");
            return back()->with("success", "Category added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }
    public function destroySubCategory($id)
    {
        SubCategory::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

}
