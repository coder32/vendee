<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sendMail extends Model
{
    protected $table = 'quick_mail';
    protected $fillable = ['id','email','subject','message','created_at'];
}
