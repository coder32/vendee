<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactUsModel extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['name','email','subject','msg','created_at','updated_at'];
}
