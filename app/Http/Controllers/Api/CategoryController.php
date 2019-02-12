<?php

namespace App\Http\Controllers\api;

use App\Category;
use App\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    Public function getCategory(){
        $category = DB::select('SELECT COUNT(user_projects.id)as job_count , categories.* FROM user_projects, categories where categories.id = user_projects.category_type_id GROUP BY category_type_id');
        return $this->responseJson(true,'All Categories Found Successfully',$category);
    }
    public function getAllJobsByCatId(Request $request){
        $category = DB::select('SELECT user_projects.*, categories.id as category_id, categories.name as category_name, users.avrage_rating as user_rating FROM user_projects LEFT JOIN users ON users.id = user_projects.user_id LEFT JOIN categories ON user_projects.category_type_id = categories.id WHERE categories.id = '.$request->cat_id);
        return $this->responseJson(true,'All Categories With Projects Found Successfully',$category);
    }
    public function getAllSkills(Request $request){
        $skills = Skills::all();
        return $this->responseJson(true,'All Skills Found Successfully',$skills);
    }
    function responseJson($status, $message, $response = array()){
        return response()->json(['status' => $status , 'message' => $message  , 'response'=> $response]);
    }
}
