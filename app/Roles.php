<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //

    protected $table = 'roles';

    public function Permissions(){
        return $this->belongsToMany('App\Permissions', 'role_has_permissions',
            'role_id', 'permission_id');
    }

    public function hasPermission($permission){

        $mydata = json_decode($this->Permissions);
        return (in_array($permission, array_column($mydata, 'name')));
        //dd (in_array($this->Permissions, [strtolower($permission)]));
    }

    public function User(){
        return $this->hasOne('App\User');
    }
}
