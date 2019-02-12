<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use App\Store;
use App\Mail\UserEmail;
use App\User;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class StoreController extends Controller
{

    public function index(){
            $store = Store::all();
            return view('admin/store/index', ['store' => $store]);
    }
    public function addData(){
        return view('admin/store/addStore');
    }
    public function storeUpdate($id)
    {
        $update = Store::where('id', $id)->get();
        return view('admin/store/updateStore',['update'=> $update]);
    }
    public function storeUpdates(Request $request)
    {
        $store =  Store::where('id', $request->get('uderid'))->first();
        $store->store_name = $request->get('name');
        $store->company_name = $request->get('company_name');
        $store->seller_name = $request->get('seller_name');
        $store->email = $request->get('email');
        $store->pickupAddress = $request->get('pickupAddress');
        $store->country = $request->get('country');
        $store->state = $request->get('state');
        $store->post_code = $request->get('post_code');
        $store->phone = $request->get('phone');

        $store->update();

        return back()->with('success','Data Updated successfully!');

    }
    public function AddStore(Request $request){
        $storeAdd = Store::where('store_name', $request->get('name'))->first();
        if($storeAdd == null){
            $addSt  = new Store();
            $addSt->store_name = $request->get('name');
            $addSt->company_name = $request->get('company_name');
            $addSt->seller_name = $request->get('seller_name');
            $addSt->email = $request->get('email');
            $addSt->pickupAddress = $request->get('pickupAddress');
            $addSt->country = $request->get('country');
            $addSt->state = $request->get('state');
            $addSt->post_code = $request->get('post_code');
            $addSt->phone = $request->get('phone');
            $addSt->save();

            ActivityLogsController::insertLog("Add Store", $addSt->id, "addStore");
            return back()->with("success", "Store added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }
    public function destroyStore($id)
    {
        Store::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

}
