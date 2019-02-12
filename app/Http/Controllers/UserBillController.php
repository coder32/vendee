<?php

namespace App\Http\Controllers;

use App\UserOrder;
use App\UserBill;
use App\Mail\UserEmail;
use App\Category;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class UserBillController extends Controller
{

    public function index(){
        $useBill = UserBill::all();
            return view('admin/UserBill/index', ['useBill' => $useBill]);
    }

    public function billView($id)
    {
        $Detail = UserOrder::where('id', $id)->get();
        return view('admin/UserBill/detailBill',['Detail'=> $Detail]);
    }

}
