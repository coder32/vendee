<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $fillable = ['user_id','store_name','location','created_at','updated_at'];
}
