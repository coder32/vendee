<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product_attributes';
    protected $fillable = ['quantity','price','sale_price','default','product_id','created_at','updated_at'];
}
