<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use App\User;
use App\UserProjects;
use App\UserSkills;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MongoDB\Driver\Manager;





class ManagerController extends Controller
{
    //

    public function index(){
        if(Utils::hasPermission("viewManager")) {
            $users = User::where('role_id', 2)->get(); // call base on the role defined
            $calltype = 'index';
            return view('admin.users.manager.index', ['users' => $users, 'callType' => $calltype]);
        }else{
            return back()->with("error", "You are not permitted to do this");
        }
    }


    public function managerView($id)
    {
        $cat = User::where('id', $id)->get();
        return view('admin.users.manager.detailManager',['cat'=> $cat]);
    }

    public function createView(){
        return view('admin.users.manager.addManager');
    }

    public function create(Request $request){
        $user = User::where('email', $request->get('email'))->first();
        if($user == null){
        $Manger  = new User();
        $Manger->name = $request->get('name');
        $Manger->email = $request->get('email');

        $Manger->password = Hash::make($request['password']);
        $Manger->address = $request->get('address');
        $Manger->role_id ='2';
        $Manger->phone = $request->get('phone');
        $Manger->status = 'Active';

        $Manger->save();


        ActivityLogsController::insertLog("Add Manager", $Manger->id, "addUser");
        return back()->with("success", "Manager added successfully");
        }else{
            return back()->with("error", "Email already exists!");
        }
    }
    public function managerUpdate($id)
    {
        $update = User::where('id', $id)->get();
        return view('admin.users.manager.updateManager',['update'=> $update]);
    }
    public function managerUpdates(Request $request)
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

