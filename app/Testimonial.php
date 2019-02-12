<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonial';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
