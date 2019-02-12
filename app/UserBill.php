<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBill extends Model
{
    protected $table = 'user_bill';
    protected $fillable = ['user_id','store_id','total_bill','status','created_at','updated_at'];
}
