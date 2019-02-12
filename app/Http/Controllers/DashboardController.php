<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use App\CacheModel;
use App\Mail\UserEmail;
use App\User;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\Mail;


class DashboardController extends Controller
{
    public function index()
    {

        if(auth()->user() != null) {
            $recientActivities = ActivityLogs::orderBy('created_at','desc')->take(3)->get();
            $cache = CacheModel::all();
            if (auth()->user()->hasRole('Admin')) {
                return view('admin.dashboard', ['cache'=>$cache[0], 'recientActivities' => $recientActivities]);
            }
            else if (auth()->user()->hasRole('Moderator')) {
                return view('admin.dashboard', ['cache'=>$cache[0], 'recientActivities' => $recientActivities]);
            }
            else if (auth()->user()->hasRole('manager')){
                return view('admin.dashboard',['cache'=>$cache[0], 'recientActivities' => $recientActivities]);
            }

        }else{
            return view('home');
        }
    }


    public function mailSend(Request $request)
    {
      $user = User::where('email', $request->get('email'))->first();
      $message = $request->get('message');
     $this->sendEmailReminder($user, $message);

      return back()->with('success','Data Added successfully!');
    }
    public function sendEmailReminder($user, $message)
    {

        Mail::to($user->email)->send(new UserEmail($user, $message));

    }



}
