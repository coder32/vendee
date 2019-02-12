<?php

namespace App\Http\Controllers;

use App\feedbackModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class feedbackController extends Controller
{
    //
    public function index(){
        return view('feedback');
    }
    public function insert(Request $request)
    {
        $file = new feedbackModel();
        $file ->name=$request->get('name');
        $file ->second_name=$request->get('second_name');
        $file ->email=$request->get('email');
        $file ->subject=$request->get('subject');
        $file ->message=$request->get('message');
        $file ->number=$request->get('number');
      /*  $file ->budget=$request->get('budget');
        $file ->time=$request->get('time');*/
        $file->save();

        return back()->with('success',"Message Sent Successfully! ");
    }
    public function View(){
        $feedback =  DB::table('feedback')
            ->select('feedback.*')
            ->orderBy('feedback.created_at', 'ASC')
            ->get();

        return view('admin.feedback.index', ['feedback'=>$feedback]);
    }
}
