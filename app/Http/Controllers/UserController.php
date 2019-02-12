<?php

namespace App\Http\Controllers;

use App\Skills;
use App\User;
use App\UserProjects;
use App\UserSkills;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }



    public function edit($id){
        $user = User::find($id);
        $userSkills = UserSkills::where('user_id', $user->id)->get();
        $userProjects = UserProjects::where('user_id', $user->id)->get();
       return view('admin.users.edit', ["item"=>$user, "userSkills"=> $userSkills, 'userProjects'=>$userProjects]);
    }

    public function update(Request $request){

    }


    public function showAllUsers(){
            $users = User::all();
            return view('admin.users.index', ['users'=> $users]);
    }

    public function showAllPendingUsers(){
        $users = User::where('status', 'In-Active')->get();
        return view('admin.users.index', ['users'=> $users]);
    }

    public function showAllDisabledUsers(){
        $users = User::where('is_trashed', '1')->get();
        return view('admin.users.index', ['users'=> $users]);
    }



    public function profile($id){
        $user = User::find($id);
        //User::with('podcasts')->get();
        $userSkills = UserSkills::where('user_id', $user->id)->get();
        $userProjects = UserProjects::where('user_id', $user->id)->get();
        return view('admin.users.profile', ["item"=>$user, "userSkills"=> $userSkills, 'userProjects'=>$userProjects]);
    }

    public function destroy($id){
        $user = User::find($id);
        if($user != null){
            if($user->is_trashed == 1){
                //destroy permently
                ActivityLogsController::insertLog("DELETE USER ".$user->name , $user->id, "deleteUser");
                $user->delete();
                return back()->with("success","User Delete Successfully!");
            }else{
                $user->is_trashed = 1;
                $user->save();
                Utils::updateCache('count_trashed_users');
                ActivityLogsController::insertLog("DISABLE USER ".$user->name, $user->id, "deleteUser");
                return back()->with("success","User Disabled Successfully!");
            }
        }else{
            return back()->withErrors("User Not found");
        }
    }

    public function restore($id){
        $user = User::find($id);
        if($user != null){
            $user->is_trashed = false;
            $user->save();
        }

        return back()->with('success', "User restore successfully");
    }
}
