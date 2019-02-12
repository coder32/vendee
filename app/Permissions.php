<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    //

    public function Roles(){
        return $this->belongsToMany('App\Roles');
    }
}
