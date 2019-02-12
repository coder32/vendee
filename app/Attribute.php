<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attribute';
    protected $fillable = ['name','description','created_at','updated_at'];
}
