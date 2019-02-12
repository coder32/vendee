<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use App\User;
use App\UserProjects;
use App\UserSkills;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ModeratorController extends Controller
{
    public function index(){
        $users = User::where('role_id', 3)->get(); // call base on the role defined
        $calltype = 'index';
        return view('admin.users.moderator.index', ['users'=>$users, 'callType'=>$calltype]);
    }



    public function moderatorView($id)
    {
        $cat = User::where('id', $id)->get();
        return view('admin.users.moderator.detailModerator',['cat'=> $cat]);
    }


    public function createView(){
        return view('admin.users.moderator.create');
    }

    public function create(Request $request){
        $user = User::where('email', $request->get('email'))->first();
        if($user == null){
            $moderator  = new User();
            $moderator->name = $request->get('name');
            $moderator->email = $request->get('email');
            $moderator->password = Hash::make($request['password']);
            $moderator->address = $request->get('address');
            $moderator->role_id ='3';
            $moderator->phone = $request->get('phone');
            $moderator->status = 'Active';
            $moderator->save();
            ActivityLogsController::insertLog("Add Moderator", $moderator->id, "addUser");

            return redirect('admin/moderator')->with("success", "Moderator added successfully");
        }else{
            return back()->with("error", "Email already exists!");
        }
    }
    public function moderatorUpdate($id)
    {
        $update = User::where('id', $id)->get();
        return view('admin.users.moderator.updateModerator',['update'=> $update]);
    }
    public function moderatorUpdates(Request $request)
    {
        $employee =  User::where('id', $request->get('uderid'))->first();
        $employee->name=$request->get('name');

        $employee->phone=$request->get('phone');
        $employee->address=$request->get('address');
        $employee->email=$request->get('email');
        $employee->password=$request->get('password');

        $employee->update();

        return back()->with('success','Data Updated successfully!');

    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

}
