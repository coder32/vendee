<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Product;
use App\Mail\UserEmail;
use App\Category;
use App\ChildCategory;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class ChildCategoryController extends Controller
{

    public function index(){
        $category = ChildCategory::all();
            return view('admin/childCategory/index', ['category' => $category]);
    }
    public function addData(){
        $catItem = SubCategory::all();
        $categ = Category::all();
        return view('admin/childCategory/addChildCategory', ['catItem' => $catItem,'categ' => $categ]);
    }
    public function childCategoryView($id)
    {
        $Categ = DB::table('childcategory')
            ->leftJoin('categories', 'childcategory.cat_id', '=', 'categories.id')
            ->select('categories.name as catName','childcategory.name as childName')
            ->where('childcategory.id', $id)
            ->get();
        $SubCateg = DB::table('childcategory')
            ->leftJoin('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('subcategory.name as SubName','childcategory.name as TchildName')
            ->where('childcategory.id', $id)
            ->get();

        $Detail = ChildCategory::where('id', $id)->get();
        return view('admin/childCategory/detailChildCategory',['Detail'=> $Detail,'Categ'=> $Categ,'SubCateg'=> $SubCateg]);
    }
    public function ChildCategoryUpdate($id)
    {
        $UpCategT = DB::table('childcategory')
            ->leftJoin('categories', 'childcategory.cat_id', '=', 'categories.id')
            ->select('categories.name as catName','childcategory.name as childName','childcategory.id')
            ->where('childcategory.id', $id)
            ->get();

        $UpSubCateg = DB::table('childcategory')
            ->leftJoin('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('subcategory.name as SubName','childcategory.name as TchildName','childcategory.id')
            ->where('childcategory.id', $id)
            ->get();
        $UpcatItem = SubCategory::all();
        $Upcateg = Category::all();
        $update = ChildCategory::where('id', $id)->get();
        return view('admin/childCategory/updateChildCategory',['update'=> $update,'UpCategT'=> $UpCategT,'UpSubCateg'=> $UpSubCateg,'UpcatItem'=> $UpcatItem,'Upcateg'=> $Upcateg]);
    }
    public function ChildCategoryUpdates(Request $request)
    {
        $store =  ChildCategory::where('id', $request->get('uderid'))->first();

        if( $request->hasFile('image1')){
            $childimage = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$childimage);
            $store->image1 =$childimage;
        }

        $store->name=$request->get('name');
        $store->description=$request->get('description');
        $store->cat_id=$request->get('cat_id');
        $store->sub_id=$request->get('sub_id');
        $store->slug=$request->get('slug');

        $store->update();

        return back()->with('success','Data Updated successfully!');

    }
    public function AddChildCategory(Request $request){

        if( $request->hasFile('image1')){

            $filenames = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$filenames);
        }

        $categoryAdd = ChildCategory::where('name', $request->get('name'))->first();
        if($categoryAdd == null){
            $addSt  = new ChildCategory();

            $addSt->image1 =$filenames;
            $addSt->name=$request->get('name');
            $addSt->cat_id=$request->get('cat_id');
            $addSt->sub_id=$request->get('sub_id');
            $addSt->description=$request->get('description');
            $addSt->slug=$request->get('slug');
            $addSt->status='Active';
            $addSt->save();

            ActivityLogsController::insertLog("Add Store", $addSt->id, "addCategory");
            return back()->with("success", "Child Category added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }
    public function destroyChildCategory($id)
    {
        ChildCategory::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

}
