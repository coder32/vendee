<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use App\Attribute;
use App\Mail\UserEmail;
use App\User;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class attributeController extends Controller
{

    public function index(){
        $attribute = Attribute::all();
        return view('admin/attribute/index', ['attribute' => $attribute]);
    }
    public function addData(){
        return view('admin/attribute/addAttribute');
    }
    public function attributeUpdate($id)
    {
        $update = Attribute::where('id', $id)->get();
        return view('admin/attribute/updateAttribute',['update'=> $update]);
    }
    public function attributeView($id)
    {
        $Detail = Attribute::where('id', $id)->get();
        return view('admin/attribute/detailAttribute',['Detail'=> $Detail]);
    }
    public function attributeUpdates(Request $request)
    {
        $attribute =  Attribute::where('id', $request->get('uderid'))->first();
        $attribute->name=$request->get('name');
        $attribute->description = $request->get('description');

        $attribute->update();

        return back()->with('success','Data Updated successfully!');

    }
    public function addAttribute(Request $request){
        $attributeAdd = Attribute::where('name', $request->get('name'))->first();
        if($attributeAdd == null){
            $addAttri  = new Attribute();
            $addAttri->name = $request->get('name');
            $addAttri->description = $request->get('description');
            $addAttri->save();

            ActivityLogsController::insertLog("Add Store", $addAttri->id, "addAttribute");
            return back()->with("success", "Store added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }
    public function destroyAttribute($id)
    {
        Attribute::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

}
