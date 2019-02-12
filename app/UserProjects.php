<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProjects extends Model
{
    //

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Type(){
        return $this->belongsTo('App\Category','category_type_id');
    }

    public function Bids(){
        return $this->hasMany('App\ProjectBid', 'project_id');
    }

    public function MileStones(){
        return $this->hasMany('App\MileStone', 'project_id');
    }

    public function PaymentDetails(){
        return $this->hasMany('App\PaymentHistoryModel', 'project_id');
    }



}
