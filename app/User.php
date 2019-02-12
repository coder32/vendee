<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Notifiable;
    use AuthenticableTrait;
    use HasApiTokens;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
     public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

    public function hasRole($roles)
    {
        return (strtolower($this->role->name) == strtolower($roles));
    }

    public function role()
    {
         return $this->belongsTo('App\Roles', 'role_id');
    }

    public function getProjects(){
        return $this->hasOne('App\UserProject', 'id','skill_id');
    }

    public function Projects(){
        return $this->hasMany('App\UserProjects', 'user_id');
    }

    public function Bids()
    {
        return $this->hasMany('App\ProjectBid', 'user_id');
    }


    public function assignedProjects()
    {
        return (strtolower($this->Bids->bid_status) == strtolower('Assigned'));
    }


    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function account()
    {
        return $this->hasOne('App\Account', 'user_id');
    }


    public function memberShip()
    {
        return $this->belongsTo('App\MembershipModel', 'membership_id');
    }

    public function getSecurityAnswers(){
        return $this->hasMany('App\UserSecurityAnswer', 'user_id');
    }


    public function Portfolio(){
         return $this->hasMany('App\ProjectPortfolio', 'user_id');
    }


    public function check($user)
    {
        $check = static::where('email',$user->email)->first();
        if(is_null($check)){
                return null;
        }else{
            return $check;
        }
    }

    public function paymentMethods(){
         return $this->hasMany('App\UserPaymentMethods');
    }

    public function getSkills(){
         $res =  $this->hasMany('App\UserSkills', 'user_id');
         return $res;

    }

}
