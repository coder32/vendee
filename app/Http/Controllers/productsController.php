<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class productsController extends Controller
{
    //
    public function index(){
        $cat = Product::all();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(6)->get();
        return view('products', [ 'cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro ]);
    }
}
