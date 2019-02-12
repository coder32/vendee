<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Utils;
use App\Message;
use App\MibNotification;
use App\NewsFeed;
use App\SelfPartner;
use App\Product;
use App\User;
use App\MembershipModel;
use App\RatingModel;
use App\UserProjects;
use App\Skills;
use App\UserSkills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function home(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $pro = Product::where('cat_id', 4)->get();
        $pfour = Product::where('cat_id', 3)->get();
        $ptwo = Product::where('cat_id', 2)->orderBy('created_at', 'ASC')->take(4)->get();
        $pfive = Product::where('cat_id', 5)->orderBy('created_at', 'ASC')->take(4)->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $cone = Category::where('id', 1)->orderBy('created_at', 'ASC')->take(4)->get();
        $ctwo = Category::where('id', 2)->orderBy('created_at', 'ASC')->take(4)->get();
        $cthree = Category::where('id', 3)->orderBy('created_at', 'ASC')->take(4)->get();
        $cfour = Category::where('id', 4)->orderBy('created_at', 'ASC')->take(4)->get();
        $cfive = Category::where('id', 5)->orderBy('created_at', 'ASC')->take(4)->get();
        $csix = Category::where('id', 6)->orderBy('created_at', 'ASC')->take(4)->get();
        $cseven = Category::where('id', 7)->orderBy('created_at', 'ASC')->take(4)->get();
        $ceight = Category::where('id', 8)->orderBy('created_at', 'ASC')->take(4)->get();
      return view('home', [ 'cat'=> $cat, 'fcat' => $fcat, 'pro' => $pro , 'pfour' => $pfour, 'ptwo' => $ptwo, 'pfive' => $pfive, 'cone' => $cone, 'ctwo' => $ctwo, 'cthree' => $cthree, 'cfour' => $cfour, 'cfive' => $cfive, 'csix' => $csix, 'cseven' => $cseven, 'ceight' => $ceight]);
    }

    public function index(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $prod = Product::all();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(6)->get();
        return view('products', [ 'cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'prod'=> $prod ]);
    }

    public function detailProduct($id){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $prod = Product::all();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(6)->get();
        $proDetail = Product::where('id', $id)->get();
        return view('detailProduct',[ 'cat' => $cat ,'fcat'=> $fcat,'pro'=> $pro, 'prod' => $prod, 'proDetail' => $proDetail ]);
    }











}
