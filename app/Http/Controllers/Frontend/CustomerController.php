<?php

namespace App\Http\Controllers\Frontend;

use App\UserOrder;
use App\Attribute;
use App\UserBill;
use App\Category;
use App\Http\Controllers\Utils;
use App\Message;
use App\MibNotification;
use App\NewsFeed;
use App\SelfPartner;
use App\Product;
use App\Store;
use App\User;
use App\MembershipModel;
use App\RatingModel;
use App\UserProjects;
use App\Skills;
use App\UserSkills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Auth;

class CustomerController extends Controller
{

    // Profile

    public function customerProfile(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
      return view('customer/Profile',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro]);
    }
    public function profileUpdate(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        return view('customer/updateProfile',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro]);
    }

    public function updateProfiles(Request $request)
    {

        $proupdate =  User::where('id', $request->get('uderid'))->first();
        if( $request->hasFile('image')){

            $filenames = $request->image->getClientOriginalName();
            $request->image->storeAs('public/img',$filenames);
        }

        $proupdate->image =$filenames;
        $proupdate->name=$request->get('name');
        $proupdate->email=$request->get('email');
        $proupdate->password=bcrypt($request->get('password'));
        $proupdate->phone=$request->get('phone');
        $proupdate->address=$request->get('address');

        $proupdate->update();

        return back()->with('success','Data Updated successfully!');

    }




    // Add to cart

    public function cartView()
    {
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        return view('customer/cart',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro]);
    }


    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "user_id" => $product->user_id,
                    "id" => $product->id,
                    "quantity" => 1,
                    "cost" => $product->cost,
                    "image1" => $product->image1
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "user_id" => $product->user_id,
            "id" => $product->id,
            "quantity" => 1,
            "cost" => $product->cost,
            "image1" => $product->image1
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {

        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function addCart(Request $request){
        $input = Input::all();
        $UserId = auth()->user()->id;
        $total = Input::get('total_bill');
        $user_id = Input::get('user_id');
        $quantity = Input::get('quantity');
        $product_id = Input::get('product_id');
            $addSt  = new UserBill();
            $addSt->total_bill=$total;
            $addSt->status="Pending";
            $addSt->user_id = $UserId;
            $addSt->store_id = $user_id;

        $addStP  = new UserOrder();
        $addStP->product_id=$product_id;
        $addStP->quantity = $quantity;
        $addStP->user_id = $UserId;
        $addStP->store_id = $user_id;

        /*foreach($product_id as $qid){
            $answer = new UserOrder();
            $answer->product_id = $qid;
            $answer->user_id = auth()->user()->id;
            $answer->quantity = Input::get('quantity'.$qid);

            echo $answer;
            die;
            $answer->save();
        }*/




            $addSt->save();
        $addStP->save();



        Session::forget('cart');
          return redirect()->back()->with('success', 'Product added to cart successfully!');




    }

    public function orderView(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $OrderDetail =  UserBill::where('user_id', auth()->user()->id)->get();
        return view('customer/order',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'OrderDetail'=> $OrderDetail]);
    }

}
