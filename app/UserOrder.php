<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $table = 'user_order';
    protected $fillable = ['user_id','product_id','quantity','store_id','amount','status','created_at','updated_at'];
}
