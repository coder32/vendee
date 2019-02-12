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





class OwnerController extends Controller
{
    //

    public function index(){
        if(Utils::hasPermission("OwnerView")) {
            $users = User::where('role_id', 4)->get(); // call base on the role defined
            $calltype = 'index';
            return view('admin.users.owner.index', ['users' => $users, 'callType' => $calltype]);
        }else{
            return back()->with("error", "You are not permitted to do this");
        }
    }


    public function ownerView($id)
    {
        $cat = User::where('id', $id)->get();
        return view('admin.users.owner.detailOwner',['cat'=> $cat]);
    }







}

