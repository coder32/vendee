<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsFeed extends Model
{
    //
    protected $table = 'news_feed';

    public function User(){
        return $this->belongsTo('App\User');
    }
}

