<?php

namespace App\Http\Controllers\Api;

use App\Mail\SubscriptionEmail;
use App\MibNotification;
use App\NewsLetterSubscription;
use App\Skills;
use App\User;
use App\CacheModel;
use App\UserSkills;
use App\VerifyUser;
use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PragmaRX\Countries\Package\Countries;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class UserController extends Controller
{
    use SendsPasswordResetEmails;

    public function login(){
        $val = (object)array();
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['access_token'] =  $user->createToken($user->email)->accessToken;
            $success['user']  = User::find($user->id);
            $userImage = $success['user']['image'];
            $success['user']['image'] = public_path().'/uploads/profile/'.$userImage;
            $success['user_skills'] = DB::select('SELECT skills.name as skill_name, skills.id as skill_id FROM `users` LEFT JOIN user_skills ON user_skills.user_id = users.id LEFT JOIN skills ON skills.id = user_skills.skill_id WHERE users.id = '.$user->id);
            return response()->json(['status' => '200', 'message'=> 'user login successfully','response' => $success]);
        }
        else{
            return response()->json(['status'=> '200', 'message'=> 'Unauthorised', 'response'=> $val]);
        }

    }

    public function register(Request $request){
        $user = User::where('email', $request->email)->first();
        $val = (object)array();
        if($user == null){
            if($request->password != null)
            {
                $user = new User();
                $userRole = 5;
                if($request->userType == 'employer'){
                    $userRole = 4;
                }else{
                    $userRole = 5;
                }

                $cache = CacheModel::find(1);
                if($cache != null){
                    $cache->count_pending_users_requests = (int)$cache->count_pending_users_requests + 1;
                    $cache->save();
                }
                $user->name = $request->first_name.' '.$request->last_name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->role_id = $userRole;
                $user->phone = $request->phone;
                $user->device_token = $request->device_token;
                $user->device_type = $request->device_type;
                $user->save();


                $verifyUser = new VerifyUser();
                $verifyUser->user_id = $user->id;
                $verifyUser->token = str_random(40);
                $verifyUser->save();

                if($request->subscribe == '1'){
                    $sub  = new NewsLetterSubscription();
                    $sub->email = $request->email;
                    $sub->save();
                }


                Mail::to($user->email)->send(new VerifyMail(User::find($user->id)));

                
                return response()->json(['status' => true , 'message' => 'New User Registered Successfully' , 'response'=> $user]);
            }
            else
            {
                return response()->json(['status' => true , 'message' => 'New User Register Request' , 'response'=> $val]);
            }
        }
        else
        {
            return response()->json(['status' => true , 'message' => 'User Already Exist' , 'response'=> $val]);
        }
    }

    public function getCountryList(){
        $countries = new Countries();
        $all = $countries->all()->pluck('name.common');
        return response()->json(['status' => true , 'message' => 'Country List Fetched Successfully' , 'response'=> $all]);
    }

    public function forgetPassword(Request $request){
        $val = (object)array();
        $user = User::where('email', $request->email)->first();
        if($user != null){
            $this->sendResetLinkEmail($request);
            return response()->json(['status' => true , 'message' => 'Forget Password Email Generated Successfully' , 'response'=> $val]);
        }
        else
        {
            return response()->json(['status' => true , 'message' => 'Sorry ! Email Not Found'  , 'response'=> $val]);
        }
    }

    public function changePassword(Request $request){
        $val = (object)array();
        $user = User::find($request->user_id);
        if($user != null){
            if(!Hash::check($request->old_password, $user->password)){
                return $this->responseJson(true,'Please Enter Valid Old Password',$val);
                //return response()->json(['status' => true , 'message' => 'Please Enter Valid Old Password' , 'response'=> []]);
            }
            else{
                $user->password = Hash::make(Input::get('new_password'));
                $user->save();
                return $this->responseJson(true,'Password Updated Successfully',$val);
                //return response()->json(['status' => true , 'message' => 'Password Updated Successfully' , 'response'=> []]);
            }
        }
        else
        {
            return $this->responseJson(true,'Sorry ! User Not Found Or Invalid User Id',$val);
            //return response()->json(['status' => true , 'message' => 'Sorry ! User Not Found Or Invalid User Id'  , 'response'=> []]);
        }
    }

    public function getUserById(Request $request){
        $user = [];
        $user['user_dtl'] = User::find($request->user_id);
        $userImage = $user['user_dtl']['image'];
        $user['user_dtl']['image'] = public_path().'/uploads/profile/'.$userImage;
        $user['user_skills'] = DB::select('SELECT skills.name as skill_name, skills.id as skill_id FROM `users` LEFT JOIN user_skills ON user_skills.user_id = users.id LEFT JOIN skills ON skills.id = user_skills.skill_id WHERE users.id = '.$request->user_id);
        return $this->responseJson(true,'User Profile Found Successfully',$user);
    }

    public function updateUserById(Request $request){
        //Update User Profile Code Goes Here
        $updateProf = User::find($request->user_id);
        if ($updateProf != null)
        {
            $updateProf->name=$request->name;
            $updateProf->phone=$request->phone;

            if( $request->hasFile('image')){

                $file1 = $request->file('image');
                $extension = $file1->getClientOriginalExtension();
                $filename1 =time().'.'.$extension;

                $file1->move(public_path().'/uploads/profile/', $filename1);
                $updateProf->image = $filename1;

            }

            $updateProf->save();

            return $this->responseJson(true,'User Profile Updated Successfully', []);
        }
        else
        {
            return $this->responseJson(true,'User Not Found', []);
        }
        //        $skills = $request->get('skill_id');
        //        UserSkills::where('user_id', Auth::user()->id)->delete();
        //        if(isset($skills)){
        //            foreach($skills as $sid){
        //                $UpdateSkill = new UserSkills();
        //                $UpdateSkill->user_id= Auth::user()->id;
        //                $UpdateSkill->skill_id=$sid;
        //                $UpdateSkill->save();
        //            }
        //        }
    }

    public function getUserProfileByProjectId(Request $request){
        $userDtl = DB::select('SELECT users.* FROM `user_projects` LEFT JOIN users ON user_projects.user_id = users.id WHERE user_projects.id ='.$request->project_id);
        if($userDtl != null)
        {
            $userImage = $userDtl[0]->image;
            $userDtl[0]->image = public_path().'/uploads/profile/'.$userImage;
            return $this->responseJson(true,'User Found Successfully Against this Project',$userDtl);
        }
        else
        {
            return $this->responseJson(true,'No User Against This Project',[]);
        }
    }

    public function getUserNotification(Request $request){
        $notifications = [];
        $notify = DB::select('SELECT mib_notification.*, users.image as sender_image from mib_notification LEFT JOIN users ON mib_notification.user_id = users.id WHERE mib_notification.sender_ids = '.$request->user_id);
        if ($notify != null)
        {
            foreach ($notify as $nt){
                $notifi = array(
                    'id' => $nt->id,
                    'sender_id' => $nt->user_id,
                    'title' => $nt->title,
                    'description' => $nt->description,
                    'type' => $nt->type,
                    'receiver_id' => $nt->sender_ids,
                    'sender_image' => App::make('url')->to('/uploads/profile/').'/'.$nt->sender_image
                );
                array_push($notifications,$notifi);
            }
            return $this->responseJson(true,'Notifications Found Successfully', $notifications);
        }
        else
        {
            return $this->responseJson(true,'No Notifications Found Against This User', []);
        }

    }

    public function getToken(){
        return response()->json(['data'=>csrf_token()]);
    }

    function responseJson($status, $message, $response = array()){
        return response()->json(['status' => $status , 'message' => $message  , 'response'=> $response]);
    }
}