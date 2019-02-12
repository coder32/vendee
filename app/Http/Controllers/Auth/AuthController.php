<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Socialite;
use Auth;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AuthController extends Controller
{

    use AuthenticatesUsers, RegistersUsers {
        AuthenticatesUsers::redirectPath insteadof RegistersUsers;
        AuthenticatesUsers::guard insteadof RegistersUsers;
    }


    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebookCallback(){
        $user = Socialite::driver('facebook')->user();
        dd($user);
    }


    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $userModel = new User;
            $createdUser = $userModel->check($user);
            if($createdUser){
            Auth::loginUsingId($createdUser->id);
            return redirect('/users');
            }else{
                return view('auth.register', ['user' => $user]);
            }

        } catch (Exception $e) {
            return redirect()->back()->with('error', "Sign in error from google!");
        }
    }
}
