<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use App\SubCategory;
use App\ChildCategory;
use App\Product;
use App\Mail\UserEmail;
use App\Category;
use App\Attribute;
use App\Brand;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class ProductController extends Controller
{

    public function index(){
        $product = Product::all();
            return view('admin/product/index', ['product' => $product]);
    }
    public function addData(){
        $category = Category::all();
        $attribute = Attribute::all();
        $brand = Brand::all();
        $SubcatItem = SubCategory::all();
        $ChildcatItem = ChildCategory::all();

        return view('admin/product/addProduct',['category'=> $category,'attribute'=> $attribute, 'brand' => $brand, 'SubcatItem' => $SubcatItem, 'ChildcatItem' => $ChildcatItem]);
    }
    public function productView($id)
    {
        $Categ = DB::table('products')
            ->leftJoin('categories', 'products.cat_id', '=', 'categories.id')
            ->select('categories.name as catName','products.name as proName')
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

        $Detail = Product::where('id', $id)->get();


        return view('admin/product/detailProduct',['Detail'=> $Detail, 'Categ'=> $Categ, 'attri' => $attri, 'bran' => $bran]);
    }

    public function AddProduct(Request $request){
        if( $request->hasFile('image1')){

            $filenames = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$filenames);
        }
        $storeAdd = Product::where('name', $request->get('name'))->first();
        if($storeAdd == null){
            $addSt  = new Product();
            $addSt->image1 =$filenames;
            $addSt->name = $request->get('name');
            $addSt->cat_id = $request->get('category');
            $addSt->brand_id = $request->get('brand');
            $addSt->attribute_id = $request->get('attribute');
            $addSt->cost = $request->get('cost');
            $addSt->description = $request->get('description');

            $addSt->sub_id = $request->get('sub_id');
            $addSt->child_id = $request->get('child_id');

            $addSt->sale_cost = $request->get('sale_price');
            $addSt->code = $request->get('code');
            $addSt->size = $request->get('size');
            $addSt->colour = $request->get('colour');
            $addSt->dumy_price = $request->get('dumy_price');

            $addSt->quantity = $request->get('quantity');
            $addSt->mass_unit = $request->get('mass_unit');
            $addSt->weight = $request->get('weight');
            $addSt->status = '0';
            $addSt->save();
            ActivityLogsController::insertLog("Add Product", $addSt->id, "addProduct");
            return back()->with("success", "Product added successfully");
        }else{
            return back()->with("error", "Name already exists!");
        }
    }


    public function productUpdate($id)
    {
        $Categ = DB::table('products')
            ->leftJoin('categories', 'products.cat_id', '=', 'categories.id')
            ->select('categories.name as catName','categories.id as catId','products.name as proName')
            ->orderBy('products.created_at', 'ASC')
            ->get();

        $attri = DB::table('products')
            ->leftJoin('attribute', 'products.attribute_id', '=', 'attribute.id')
            ->select('attribute.name as attName','attribute.id as attId','products.name as proName')
            ->orderBy('products.created_at', 'ASC')
            ->get();

        $bran = DB::table('products')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
            ->select('brands.name as braName','brands.id as braId','products.name as proName')
            ->orderBy('products.created_at', 'ASC')
            ->get();


        $childIte = DB::table('products')
            ->leftJoin('childcategory', 'products.child_id', '=', 'childcategory.id')
            ->select('products.name as catName','products.id','childcategory.name as childName')
            ->where('products.id', $id)
            ->get();
        $SubCategIt = DB::table('products')
            ->leftJoin('subcategory', 'products.sub_id', '=', 'subcategory.id')
            ->select('subcategory.name as SubName','products.id','products.name as TchildName')
            ->where('products.id', $id)
            ->get();


        $category = Category::all();
        $SUBcategory = SubCategory::all();
        $CHILDcategory = ChildCategory::all();
        $attribute = Attribute::all();
        $brand = Brand::all();

        $update = Product::where('id', $id)->get();
        return view('admin/product/updateProduct',['CHILDcategory'=> $CHILDcategory,'SUBcategory'=> $SUBcategory,'childIte'=> $childIte,'SubCategIt'=> $SubCategIt,'update'=> $update, 'Categ'=> $Categ, 'attri' => $attri, 'bran' => $bran,'category'=> $category,'attribute'=> $attribute, 'brand' => $brand]);
    }
    public function productUpdates(Request $request)
    {
        $UpdatePro =  Product::where('id', $request->get('uderid'))->first();

        if( $request->hasFile('image1')){

            $filenames = $request->image1->getClientOriginalName();
            $request->image1->storeAs('public/images',$filenames);
            $UpdatePro->image1 =$filenames;

        }

        $UpdatePro->name = $request->get('name');
        $UpdatePro->cat_id = $request->get('category');
        $UpdatePro->brand_id = $request->get('brand');
        $UpdatePro->attribute_id = $request->get('attribute');
        $UpdatePro->cost = $request->get('cost');
        $UpdatePro->description = $request->get('description');
        $UpdatePro->sale_cost = $request->get('sale_price');
        $UpdatePro->code = $request->get('code');

        $UpdatePro->sub_id = $request->get('sub_id');
        $UpdatePro->child_id = $request->get('child_id');

        $UpdatePro->quantity = $request->get('quantity');
        $UpdatePro->mass_unit = $request->get('mass_unit');
        $UpdatePro->weight = $request->get('weight');

        $UpdatePro->update();

        return back()->with('success','Data Updated successfully!');

    }

    public function destroyProduct($id)
    {
        Product::where('id',$id)->delete();
        return Redirect::back()->with('success','Data deleted successfully!');
    }

}
