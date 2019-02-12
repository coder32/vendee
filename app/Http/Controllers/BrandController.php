<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use App\Brand;
use App\Mail\UserEmail;
use App\Category;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class BrandController extends Controller
{

    public function index(){
        $brand = Brand::all();
            return view('admin/brand/index', ['brand' => $brand]);
    }
    public function addData(){
        return view('admin/brand/addBrand');
    }
    public function brandView($id)
    {
        $Detail = Brand::where('id', $id)->get();
        return view('admin/brand/detailBrand',['Detail'=> $Detail]);
    }
    public function brandUpdate($id)
    {
        $update =  Brand::where('id', $id)->get();
        return view('admin/brand/updateBrand',['update'=> $update]);
    }
    public function brandUpdates(Request $request)
    {
        $brand =  Brand::where('id', $request->get('uderid'))->first();
        $brand->name=$request->get('name');


        $brand->update();

        return back()->with('success','Data Updated successfully!');

    }
    public function AddBrand(Request $request){
        $brandAdd = Brand::where('name', $request->get('name'))->first();
        if($brandAdd == null){
            $addSt  = new Brand();
            $addSt->name = $request->get('name');
            $addSt->save();

            ActivityLogsController::insertLog("Add Store", $addSt->id, "addBrand");
            return back()->with("success", "Brand added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }
    public function destroyBrand($id)
    {
        Brand::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

}
