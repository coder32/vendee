<?php

namespace App\Http\Controllers;

use App\UserOrder;
use App\Product;
use App\Mail\UserEmail;
use App\Category;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class UserOrderController extends Controller
{

    public function index(){
        $uOrder = UserOrder::all();
            return view('admin/UserOrder/index', ['uOrder' => $uOrder]);
    }

    public function billView($id)
    {
        $Detail = UserOrder::where('id', $id)->get();
        return view('admin/UserOrder/detailBill',['Detail'=> $Detail]);
    }


}
