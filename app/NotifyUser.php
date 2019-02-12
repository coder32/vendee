<?php

namespace App;

use App\Events\ChatSent;
use Illuminate\Database\Eloquent\Model;

class NotifyUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::created(function($model) {
            //echo $model;
            broadcast(new ChatSent($model));
        });
    }
}
