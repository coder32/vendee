<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    protected $table = 'childcategory';
    protected $fillable = ['id','sub_id','name','slug','description','image1','status','created_at','updated_at'];
}
