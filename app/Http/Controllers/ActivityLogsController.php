<?php

namespace App\Http\Controllers;

use App\ActivityLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityLogsController extends Controller
{
    //

    public static function insertLog($action, $perfomeeId, $message){
            $activityLogs = new ActivityLogs();
            $activityLogs->user_id = Auth::user()->id;
            $activityLogs->action = $action;
            $activityLogs->performee_id = $perfomeeId;
            $activityLogs->type = $message;
            $activityLogs->save();
    }

    public function index(){
        $logs = ActivityLogs::all();
        return view('admin.logs.index', ['logs'=>$logs]);
    }
}
