<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategory';
    protected $fillable = ['id','name','slug','description','image1','status','created_at','updated_at'];
}
