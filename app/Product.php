<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['user_id','name','cat_id','attribute_id','code','brand_id','sale_cost','cover','quantity','sale_price','mass_unit','cost','weight','status','length','width','height','name','created_at','updated_at'];
}
