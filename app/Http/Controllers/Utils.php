<?php

namespace App\Http\Controllers;

use App\CacheModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class Utils extends Controller
{
    public static function setPassword($passwordStr){
        return Hash::make($passwordStr);
    }

    public static function getPassword($passwordStr){
        return bcrypt($passwordStr);
    }

    public static function hasPermission($permission){
        if(auth()->user()->role->hasPermission($permission)){
            return true;
        }
        return false;
    }

    public static function sendEmail($user, $title, $message, $from){
        Mail::send('email', ['user' => $user], function ($m) use ($user) {
            $m->from('z.ahmed@mega-softtech.com', 'Signup Configuration');
            $m->to($user->email, $user->name)->subject('Signup configuration');
        });
    }





    public static function sendEmailIndiviual($user){
        Mail::send([], ['user' => $user], function ($m) use ($user) {
            $m->from('z.ahmed@mega-softtech.com', $user->message);
            $m->to($user->name, $user->name)->subject($user->subject);
        });
    }


    public static function User($item){
        $user = new User();
        $user->id = $item->id;
        $user->name = $item->name;
        $user->email = $item->email;
        $user->phone = $item->phone;
        $item->image = $item->image;

        return $user;
    }

    public function udateMessageCounter(){
        $messages = DB::select('SELECT messages.id, messages.from_user_id, messages.to_user_id, messages.text,messages.created_at, users.name FROM messages INNER JOIN users ON users.id = messages.from_user_id WHERE (messages.from_user_id = '.auth()->user()->id.' OR messages.to_user_id = '.auth()->user()->id.') AND messages.is_read = 0');
        Session::put('messages', $messages);
    }

    public function udateNotificationCounter(){
       $notifications = DB::select('SELECT * FROM mib_notification AS t1 WHERE NOT EXISTS (SELECT * FROM user_notification_status AS t2 WHERE t2.notification_id = t1.id AND t2.user_id ='.auth()->user()->id.') AND (t1.sender_ids is NULL OR t1.sender_ids = '.auth()->user()->id.') AND (t1.type ="type_admin" OR t1.type= "type_system" || t1.sender_ids = '.auth()->user()->id.') AND t1.created_at > (SELECT created_at FROM users where id = '.auth()->user()->id.') ORDER BY t1.created_at DESC');
       Session::put('notifications', $notifications);
    }


    public static function updateCache($columnName){
        $cache = CacheModel::find(1);
        if($cache == null){
            $cache = new CacheModel();
        }
        if($columnName == 'count_users'){
            $cache->count_users = (int)$cache->count_users + 1;

        }else if($columnName == 'count_pending_users_requests'){
            $cache->count_pending_users_requests = (int)$cache->count_pending_users_requests + 1;

        }else if($columnName == 'count_active_users'){
            $cache->count_active_users = (int)$cache->count_active_users + 1;

        }else if($columnName == 'count_comments'){
            $cache->count_comments = (int)$cache->count_comments + 1;

        }else if($columnName == 'count_trashed_users'){
            $cache->count_trashed_users = (int)$cache->count_trashed_users + 1;

        }else if($columnName == 'count_trashed_projects'){
            $cache->count_trashed_projects = (int)$cache->count_trashed_projects + 1;

        }else if($columnName == 'count_pending_projects'){
            $cache->count_pending_projects = (int)$cache->count_pending_projects + 1;


        }else if($columnName == 'count_active_projects'){
            $cache->count_active_projects = (int)$cache->count_active_projects + 1;

        }else if($columnName == 'count_projects'){
            $cache->count_projects = (int)$cache->count_projects + 1;

        }else if($columnName == 'count_contact'){
            $cache->count_contact = (int)$cache->count_contact + 1;

        }else if($columnName == 'count_feedback'){
            $cache->count_feedback = (int)$cache->count_feedback + 1;

        }

        $cache->save();
    }


    public static function descreaseCache($columnName){
        $cache = CacheModel::find(1);
        if($cache == null){
            $cache = new CacheModel();
        }
        if($columnName == 'count_users' && $cache->count_users > 0){
            $cache->count_users = (int)$cache->count_users - 1;

        }else if($columnName == 'count_pending_users_requests' && $cache->count_pending_users_requests > 0){
            $cache->count_pending_users_requests = (int)$cache->count_pending_users_requests - 1;

        }else if($columnName == 'count_active_users' && $cache->count_active_users > 0 ){
            $cache->count_active_users = (int)$cache->count_active_users - 1;

        }else if($columnName == 'count_comments' && $cache->count_comments > 0){
            $cache->count_comments = (int)$cache->count_comments - 1;

        }else if($columnName == 'count_trashed_users' && $cache->count_trashed_users > 0){
            $cache->count_trashed_users = (int)$cache->count_trashed_users - 1;

        }else if($columnName == 'count_trashed_projects' && $cache->count_trashed_projects > 0){
            $cache->count_trashed_projects = (int)$cache->count_trashed_projects - 1;

        }else if($columnName == 'count_pending_projects' && $cache->count_pending_projects > 0){
            $cache->count_pending_projects = (int)$cache->count_pending_projects - 1;


        }else if($columnName == 'count_active_projects' && $cache->count_active_projects > 0){
            $cache->count_active_projects = (int)$cache->count_active_projects - 1;

        }else if($columnName == 'count_projects' && $cache->count_projects > 0){
            $cache->count_projects = (int)$cache->count_projects - 1;

        }else if($columnName == 'count_contact' && $cache-> count_contact > 0){
            $cache->count_contact = (int)$cache->count_contact - 1;

        }else if($columnName == 'count_feedback' && $cache->count_feedback > 0){
            $cache->count_feedback = (int)$cache->count_feedback - 1;

        }

        $cache->save();
    }


}
