<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\SubCategory;
use App\ChildCategory;
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

class DashboardController extends Controller
{

    public function home(){
        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
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
        $user = auth()->user();

        $cat = DB::table('categories')
            ->join('childcategory', 'childcategory.cat_id', '=', 'categories.id')
            ->join('subcategory', 'childcategory.sub_id', '=', 'subcategory.id')
            ->select('categories.image1 as image11','childcategory.image1 as image22','subcategory.image1 as image33','categories.name as catName','childcategory.name as childName','childcategory.id','childcategory.cat_id','childcategory.sub_id','subcategory.name as SubName')
            ->get();
        $fcat = Category::orderBy('created_at', 'ASC')->take(6)->get();
        $pro = Product::orderBy('created_at', 'ASC')->take(12)->get();

        $newsFeed = NewsFeed::orderBy('created_at', 'DESC')->take(5)->get();
        $rating = RatingModel::where('ratee_user_id', $user->id)->get();


      /*  $notifications = DB::select('SELECT * FROM mib_notification AS t1 WHERE NOT EXISTS (SELECT * FROM user_notification_status AS t2 WHERE t2.notification_id = t1.id AND t2.user_id ='.auth()->user()->id.') AND (t1.sender_ids is NULL OR t1.sender_ids = '.auth()->user()->id.') AND (t1.type ="type_admin" OR t1.type= "type_system" || t1.sender_ids = '.auth()->user()->id.') AND t1.created_at > (SELECT created_at FROM users where id = '.auth()->user()->id.') ORDER BY t1.created_at DESC');
        $messages = DB::select('SELECT messages.id, messages.from_user_id, messages.to_user_id, messages.text,messages.created_at, users.name FROM messages INNER JOIN users ON users.id = messages.from_user_id WHERE (messages.from_user_id = '.auth()->user()->id.' OR messages.to_user_id = '.auth()->user()->id.') AND messages.is_read = 0');*/
$messages = 0;
        $notifications = 0;
        if($user->hasRole('employee')){
            $totalBidsOfMonth = DB::select('SELECT count(*) as bids FROM project_bid WHERE user_id = '.auth()->user()->id.' AND MONTH(created_at) = MONTH(CURRENT_DATE()) AND YEAR(created_at) = YEAR(CURRENT_DATE())');
            Session::put('currentMonthBids', $totalBidsOfMonth[0]->bids);
        }

        else if($user->hasRole('employer')){
            $totalProjectsOfMonth = DB::select('SELECT count(*) as projects FROM user_projects WHERE user_id = '.auth()->user()->id.' AND MONTH(created_at) = MONTH(CURRENT_DATE()) AND YEAR(created_at) = YEAR(CURRENT_DATE())');
            Session::put('currentMonthProjects', $totalProjectsOfMonth[0]->projects);
        }


        Session::put('messages', $messages);
        Session::put('notifications', $notifications);

        $totalRating = 0;
        $ratingCount = 0;
        if(count($rating) > 0) {
            foreach ($rating as $rate) {
                $currentRating = floatval($rate->rating_skill) + floatval($rate->rate_time) + floatval($rate->rating_coordination);
                $currentRating = $currentRating / 15;
                $currentRating = $currentRating * 5;
                $ratingCount += 10;
                $totalRating += $currentRating;
            }

            $totalRating = $totalRating/$ratingCount;
        }
        $user->avrage_rating = $totalRating;
        $user->save();

        if($user->hasRole('Customer')){

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

            return view('customer.dashboard' ,['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'cat'=> $cat, 'fcat' => $fcat, 'pro' => $pro , 'pfour' => $pfour, 'ptwo' => $ptwo, 'pfive' => $pfive, 'cone' => $cone, 'ctwo' => $ctwo, 'cthree' => $cthree, 'cfour' => $cfour, 'cfive' => $cfive, 'csix' => $csix, 'cseven' => $cseven, 'ceight' => $ceight]);
        }
        else if($user->hasRole('Owner')){
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

            return view('owner.dashboard' ,['cat'=> $cat,'fcat'=> $fcat,'pro'=> $pro,'cat'=> $cat, 'fcat' => $fcat, 'pro' => $pro , 'pfour' => $pfour, 'ptwo' => $ptwo, 'pfive' => $pfive, 'cone' => $cone, 'ctwo' => $ctwo, 'cthree' => $cthree, 'cfour' => $cfour, 'cfive' => $cfive, 'csix' => $csix, 'cseven' => $cseven, 'ceight' => $ceight]);
        }
        else if($user->hasRole('admin') || $user->hasRole('moderator') || $user->hasRole('manager')){
            return redirect('/admin');
        }
        return view('errors.404');
    }
}
