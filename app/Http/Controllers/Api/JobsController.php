<?php

namespace App\Http\Controllers\api;

use App\UserProjects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsController extends Controller
{
    public function getJobById(Request $request){
        $projectDetails = UserProjects::find($request->job_id);
        return $this->responseJson(true,'Project Found Successfully',$projectDetails);
    }
    function responseJson($status, $message, $response = array()){
        return response()->json(['status' => $status , 'message' => $message  , 'response'=> $response]);
    }
}
