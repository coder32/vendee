<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use App\User;
use App\UserProjects;
use App\UserSkills;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MongoDB\Driver\Manager;





class CustomerController extends Controller
{
    //

    public function index(){
        if(Utils::hasPermission("OwnerView")) {
            $users = User::where('role_id', 5)->get(); // call base on the role defined
            $calltype = 'index';
            return view('admin.users.customer.index', ['users' => $users, 'callType' => $calltype]);
        }else{
            return back()->with("error", "You are not permitted to do this");
        }
    }


    public function customerView($id)
    {

        $bran = DB::table('users')
            ->leftJoin('user_bill', 'users.id', '=', 'user_bill.user_id')
            ->select('user_bill.*','users.*')
            ->orderBy('users.created_at', 'ASC')
            ->get();

        $cat = User::where('id', $id)->get();
        return view('admin.users.customer.detailCustomer',['cat'=> $cat,'bran' => $bran]);
    }







}

