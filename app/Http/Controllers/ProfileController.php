<?php

namespace App\Http\Controllers;

use App\Mail\AccountConfirm;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Validator;



class ProfileController extends Controller
{

    public function verifyProfile($id){

        $user = User::find($id);

        ActivityLogsController::insertLog("VERIFY PROFILE OF", $user->id, "verifyProfile");
        $user->email_verified_at = date("Y-m-d h:i:s");
        $user->status = 'Active';
        $user->save();
        Utils::updateCache('count_active_users');
        Mail::to($user->email)->send(new AccountConfirm($user));


       \App\MibNotification::create([
            'user_id' => \auth()->user()->id,
            'title' => "Verify Account",
            'description' => 'Your Account is now Verified',
            'type'=> 'type_verify_account',
            'sender_ids'=> $user->id
        ]);



        return back();
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.profile', ['item'=> $user]);
    }
    public function pass(){
        return view('admin.updatePassword');
    }
    public function ViewProfile(){
        return view('profile');
    }

    public function changePassword()
    {
        /*$this->validate(request(), [
            'current_password' => 'required|current_password',
            'new_password' => 'required|string|min:6|confirmed',
        ]);*/

        $user = Auth::user();



        if(!Hash::check(Input::get('current_password'), $user->password)){

            return back()->with('error', 'Current password not match');
        }
        else if(Input::get('new_password') != Input::get('confirm_password')){
            return back()->with('error', 'Password fields not match');
        }else{
            $user->password = Hash::make(Input::get('new_password'));
            $user->save();
            return $this->verifyProfile($user->id)->with('success', 'password updated successfully');
        }

    }


    public function update(Request $request){


       $user = User::find($request->id);
       if($user != null){
           $user->name = $request->name;
           $user->email = $request->email;
           $user->phone = $request->phone;
           if( $request->hasFile('profile_image')){

               $filename = $request->profile_image->getClientOriginalName();
               $request->profile_image->storeAs('public/img',$filename);
               $user->image=$filename;
           }
           $user->save();
       }

       return $this->edit($request->id);

    }
}
