<?php

namespace App\Http\Controllers\Frontend;

use App\Attribute;
use App\ChildCategory;
use App\SubCategory;
use App\Brand;
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
use App\UserBill;
use App\UserProjects;
use App\Skills;
use App\UserSkills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OwnerController extends Controller
{

    // Profile
    public function ownerProfile(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
      return view('Owner/Profile',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro]);
    }

    //Update Profile
    public function profileUpdate(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        return view('Owner/updateProfile',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro]);
    }

    //Update Profile
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

    // Store
    public function ownerStore(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $storeInfo = Store::where('user_id' ,  auth()->user()->id )->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();

        return view('Owner/Store',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'storeInfo'=> $storeInfo]);
    }

//Update Store
    public function updateStore(Request $request)
    {
        $abstore =  Store::where('user_id', $request->get('uderid'))->first();
        $abstore->store_name=$request->get('store_name');
        $abstore->phone=$request->get('phone');
        $abstore->location=$request->get('location');
        $abstore->update();
        return back()->with('success','Data Updated successfully!');

    }

// Brand
    public function ownerBrand(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $storeInfo = Store::where('user_id' ,  auth()->user()->id )->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $film = Brand::where('user_id' ,  auth()->user()->id )->get();
        return view('Owner/brand',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'storeInfo'=> $storeInfo,'film' => $film]);
    }

//Add Brand
    public function addBrand(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        return view('Owner/addBrand',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro]);
    }

    //Add Brand
    public function addBrands(Request $request){
            $UserId = auth()->user()->id;
        $brandAdd = Brand::where('name', $request->get('name'))->first();
        if($brandAdd == null){
            $addSt  = new Brand();
            $addSt->name = $request->get('name');
            $addSt->user_id = $UserId;
            $addSt->save();

            return back()->with("success", "Product added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }
    //Delete Brand
    public function destroyBrand($id)
    {
        Brand::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

// Attribute
    public function ownerAttribute(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $storeInfo = Store::where('user_id' ,  auth()->user()->id )->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $attri = Attribute::where('user_id' ,  auth()->user()->id )->get();
        return view('Owner/attribute',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'storeInfo'=> $storeInfo,'attri' => $attri]);
    }
    //Add Attribute
    public function addAttribute(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        return view('Owner/addAttribute',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro]);
    }

    //Add Attribute
    public function addAttributes(Request $request){
        $UserId = auth()->user()->id;
        $brandAdd = Attribute::where('name', $request->get('name'))->first();
        if($brandAdd == null){
            $addSt  = new Attribute();
            $addSt->name = $request->get('name');
            $addSt->description = $request->get('description');
            $addSt->user_id = $UserId;
            $addSt->save();

            return back()->with("success", "Product added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }

    //Delete Attribute
    public function destroyAttribute($id)
    {
        Attribute::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

    // Category
    public function ownerCategory(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $storeInfo = Store::where('user_id' ,  auth()->user()->id )->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $catri = Category::where('user_id' ,  auth()->user()->id )->get();

        return view('Owner/category',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'storeInfo'=> $storeInfo,'catri' => $catri]);
    }

    // Add Category
    public function addCategory(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $catri = Attribute::where('user_id' ,  auth()->user()->id )->get();
        return view('Owner/addCategory',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'catri'=> $catri]);
    }

    // Add Category
    public function addCategorys(Request $request){
        $UserId = auth()->user()->id;

        $brandAdd = Category::where('name', $request->get('name'))->first();
        if($brandAdd == null){
            if( $request->hasFile('image1')){

                $filenames = $request->image1->getClientOriginalName();
                $request->image1->storeAs('public/images',$filenames);
            }

            $addSt = new Category();
            $addSt->image1 =$filenames;
            $addSt->name = $request->get('name');
            $addSt->slug = $request->get('slug');
            $addSt->description = $request->get('description');
            $addSt->user_id = $UserId;


            $addSt->save();

            return back()->with("success", "Product added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }

    // Delete Category
    public function destroyCategory($id)
    {
        Category::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

    //Sub Category View
    public function ownerSubCategory(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $storeInfo = Store::where('user_id' ,  auth()->user()->id )->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $catri = SubCategory::where('user_id' ,  auth()->user()->id )->get();

        return view('Owner/subCategory',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'storeInfo'=> $storeInfo,'catri' => $catri]);
    }
    // Delete SubCategory
    public function destroySubCategory($id)
    {
        SubCategory::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

    // Add SubCategory
    public function addSubCategory(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $catri = Attribute::where('user_id' ,  auth()->user()->id )->get();
        $SubCat = Category::orderBy('created_at', 'ASC')->get();
        return view('Owner/addSubCategory',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'catri'=> $catri,'SubCat'=> $SubCat]);
    }

    // Add SubCategory

    public function addSubCategorys(Request $request){
        $UsersId = auth()->user()->id;

        if( $request->hasFile('image1')){

            $filenames = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$filenames);
        }

        $categoryAdd = SubCategory::where('name', $request->get('name'))->first();
        if($categoryAdd == null){
            $addSt  = new SubCategory();

            $addSt->image1 =$filenames;
            $addSt->name=$request->get('name');
            $addSt->cat_id=$request->get('cat_id');
            $addSt->description=$request->get('description');
            $addSt->slug=$request->get('slug');
            $addSt->user_id = $UsersId;

            $addSt->status='Active';
            $addSt->save();

             return back()->with("success", "Category added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }

    //Child Category View
    public function ownerChildCategory(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $storeInfo = Store::where('user_id' ,  auth()->user()->id )->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $childcatri = ChildCategory::where('user_id' ,  auth()->user()->id )->get();

        return view('Owner/childCategory',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'storeInfo'=> $storeInfo,'childcatri' => $childcatri]);
    }

    // Delete Child Category
    public function destroyChildCategory($id)
    {
        ChildCategory::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }
    // Add Child Category
        public function addChildCategory(){
            $cat = DB::table('categories')
                ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
                ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
                ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
                ->get();
            $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
            $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
            $catri = Attribute::where('user_id' ,  auth()->user()->id )->get();
            $SubCat = Category::orderBy('created_at', 'ASC')->get();
            $SubCategory = SubCategory::orderBy('created_at', 'ASC')->get();
            return view('Owner/addChildCategory',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'catri'=> $catri,'SubCat'=> $SubCat,'SubCategory'=> $SubCategory]);
        }
// Add Child Category

    public function addChildCategorys(Request $request){
        $UsId = auth()->user()->id;

        if( $request->hasFile('image1')){

            $filenames = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$filenames);
        }

        $categoryAdd = SubCategory::where('name', $request->get('name'))->first();
        if($categoryAdd == null){
            $addSt  = new ChildCategory();

            $addSt->image1 =$filenames;
            $addSt->name=$request->get('name');
            $addSt->cat_id=$request->get('cat_id');
            $addSt->sub_id=$request->get('sub_id');
            $addSt->description=$request->get('description');
            $addSt->slug=$request->get('slug');
            $addSt->user_id = $UsId;

            $addSt->status='Active';
            $addSt->save();

            return back()->with("success", "Category added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }

    // Product
    public function ownerProduct(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $storeInfo = Store::where('user_id' ,  auth()->user()->id )->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $produ = Product::where('user_id' ,  auth()->user()->id )->get();

        return view('Owner/product',['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'storeInfo'=> $storeInfo,'produ' => $produ]);
    }

    // Add Product
    public function addProduct(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $attribute = Attribute::all();
        $category = Category::all();
        $SubCategory = SubCategory::all();
        $ChildCategory = ChildCategory::all();
        $brand = Brand::all();
        $cat = Category::all();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $catri = Attribute::where('user_id' ,  auth()->user()->id )->get();
        return view('Owner/addProduct',['ChildCategory'=> $ChildCategory,'SubCategory'=> $SubCategory,'cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'catri'=> $catri,'category'=> $category,'attribute'=> $attribute, 'brand' => $brand]);
    }

    // Add Product
    public function addProducts(Request $request){
        $UserId = auth()->user()->id;

        if( $request->hasFile('image1')){

            $filenames = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$filenames);
        }
        $storeAdd = Product::where('name', $request->get('name'))->first();
        if($storeAdd == null){
            $addSt  = new Product();
            $addSt->image1 =$filenames;
            $addSt->name = $request->get('name');
            $addSt->user_id =$UserId;
            $addSt->cat_id = $request->get('category');
            $addSt->sub_id = $request->get('sub_id');
            $addSt->child_id = $request->get('child_id');
            $addSt->brand_id = $request->get('brand');
            $addSt->attribute_id = $request->get('attribute');
            $addSt->cost = $request->get('cost');
            $addSt->description = $request->get('description');
            $addSt->sale_cost = $request->get('sale_cost');
            $addSt->code = $request->get('code');
            $addSt->size = $request->get('size');
            $addSt->colour = $request->get('colour');
            $addSt->dumy_price = $request->get('dumy_price');

            $addSt->quantity = $request->get('quantity');
            $addSt->mass_unit = $request->get('mass_unit');
            $addSt->weight = $request->get('weight');
            $addSt->status = '0';

            $addSt->save();

            return back()->with("success", "Product added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }

    // Delete Product
    public function destroyProduct($id)
    {
        Product::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

    // Detail Product
    public function detailProduct($id)
    {

        $Categ = DB::table('products')
            ->leftJoin('categories', 'products.cat_id', '=', 'categories.id')
            ->select('categories.name as catName','products.name as proName')
            ->orderBy('products.created_at', 'ASC')
            ->get();

        $SubCateg = DB::table('products')
            ->leftJoin('subcategory', 'products.sub_id', '=', 'subcategory.id')
            ->select('subcategory.name as subName','products.name as proName')
            ->orderBy('products.created_at', 'ASC')
            ->get();

        $attri = DB::table('products')
            ->leftJoin('attribute', 'products.attribute_id', '=', 'attribute.id')
            ->select('attribute.name as attName','products.name as proName')
            ->orderBy('products.created_at', 'ASC')
            ->get();

        $bran = DB::table('products')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
            ->select('brands.name as braName','products.name as proName')
            ->orderBy('products.created_at', 'ASC')
            ->get();


        $cat = Brand::all();
        $storeInfo = Store::where('user_id' ,  auth()->user()->id )->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $Detail = Product::where('id', $id)->get();

        return view('Owner/detailProduct',['SubCateg'=> $SubCateg,'Categ'=> $Categ, 'attri' => $attri, 'bran' => $bran,'cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'storeInfo'=> $storeInfo,'Detail'=> $Detail]);
    }



    // Store
    public function ownerOrder(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $storeInfo = Store::where('user_id' ,  auth()->user()->id )->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();
        $OrderDetail = UserBill::where('store_id',auth()->user()->id)->get();

        return view('Owner/order',['OrderDetail'=> $OrderDetail,'cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'storeInfo'=> $storeInfo]);
    }



}
