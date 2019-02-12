<?php

namespace App\Http\Controllers;

use App\contactUsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class contactController extends Controller
{
    //
    public function index(){
        return view('contact');
    }
    public function insert(Request $request)
    {
        $file = new contactUsModel();
        $file ->name=$request->get('name');
        $file ->email=$request->get('email');
        $file ->subject=$request->get('subject');
        $file ->msg=$request->get('msg');
        $file->save();
        return back()->with('success',"Message Sent Successfully! ");

    }
    public function View(){
        $contact =  DB::table('contacts')
            ->select('contacts.*')
            ->orderBy('contacts.created_at', 'ASC')
            ->get();
        return view('admin.contactUs.contact', ['contact'=>$contact]);
    }
}
