<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedbackModel extends Model
{
    protected $table = 'feedback';
    protected $fillable = ['name','email','number','subject','message','created_at'];
}
