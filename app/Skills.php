<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    //

    public function UserSkills(){
        return $this->belongsTo('App\UserSkills');
    }
    public function Category(){
        return $this->hasOne('App\Category', 'id','cat_id');
    }

    public function getSkill(){
        return $this->hasOne('App\UserSkills', 'skill_id','id');
    }
}
