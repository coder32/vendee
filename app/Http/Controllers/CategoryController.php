<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use App\Product;
use App\Mail\UserEmail;
use App\Category;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class CategoryController extends Controller
{

    public function index(){
        $category = Category::all();
            return view('admin/category/index', ['category' => $category]);
    }
    public function addData(){
        return view('admin/category/addCategory');
    }
    public function categoryView($id)
    {
        $Detail = Category::where('id', $id)->get();
        return view('admin/category/detailcategory',['Detail'=> $Detail]);
    }
    public function categoryUpdate($id)
    {
        $update = Category::where('id', $id)->get();
        return view('admin/category/updateCategory',['update'=> $update]);
    }
    public function categoryUpdates(Request $request)
    {
        $store =  Category::where('id', $request->get('uderid'))->first();

        if( $request->hasFile('image1')){

            $filenames = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$filenames);
        }
        $store->image1 =$filenames;
        $store->name=$request->get('name');
        $store->description=$request->get('description');
        $store->slug=$request->get('slug');

        $store->update();

        return back()->with('success','Data Updated successfully!');

    }
    public function AddCategory(Request $request){

        if( $request->hasFile('image1')){

            $filenames = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$filenames);
        }

        $categoryAdd = Category::where('name', $request->get('name'))->first();
        if($categoryAdd == null){
            $addSt  = new Category();

            $addSt->image1 =$filenames;
            $addSt->name=$request->get('name');
            $addSt->description=$request->get('description');
            $addSt->slug=$request->get('slug');
            $addSt->is_featured = $request->get('is_featured');
            $addSt->save();

            ActivityLogsController::insertLog("Add Store", $addSt->id, "addCategory");
            return back()->with("success", "Category added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }
    public function destroyCategory($id)
    {
        Category::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

}
