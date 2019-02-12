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

class CategoryController extends Controller
{

    public function index(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $cats = Category::all();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
      return view('category', [ 'cat'=> $cat,'cats'=> $cats,'fcat'=> $fcat,'pro'=> $pro ]);
    }

    public function detailCategory($id)
    {
        $catDetail = Product::where('cat_id', $id)->get();
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        return view('detailCategory',['catDetail'=> $catDetail,'cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro ]);
    }













}
