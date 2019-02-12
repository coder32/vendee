<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLogs extends Model
{
    //

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Perfomee(){
        return $this->belongsTo('App\User', 'performee_id');
    }

    public function Project(){
        return $this->belongsTo('App\UserProjects', 'performee_id');
    }
}
