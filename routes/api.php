<?php

/*
|--------------------------------------------------------------------------
| API Routes
| Author: Dawood Siddiq Sandhu (HiddenNinja)
| Version: 1.0
| Laravel Version : 5.7
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*//Login
Route::post('/login', ['uses'=>'Api\UserController@login', 'as'=>'user.login']);

//Register
Route::post('/register', ['uses'=>'Api\UserController@register', 'as'=>'user.register']);

//Forget Password
Route::post('/forgetPassword', ['uses'=>'Api\UserController@forgetPassword', 'as'=>'user.forgetPassword']);

//Change Password
Route::post('/changePassword', ['uses'=>'Api\UserController@changePassword', 'as'=>'user.changePassword']);

//User Profile
Route::post('/getUserProfile', ['uses'=>'Api\UserController@getUserById', 'as'=>'user.getUserProfile']);
Route::post('/updateUserProfile', ['uses'=>'Api\UserController@updateUserById', 'as'=>'user.updateUserProfile']);

//Country List
Route::get('/countryList', 'Api\UserController@getCountryList');

//Get User Notification
Route::post('/getUserNotify','Api\UserController@getUserNotification');

//Get User Profile By Project Id
Route::post('/getUserByProjectId','Api\UserController@getUserProfileByProjectId');

//Get All Categories
Route::get('/getCategories', 'Api\CategoryController@getCategory');

//Get All Jobs By Category ID
Route::post('/getJobsByCatId', 'Api\CategoryController@getAllJobsByCatId');

//Get Job Details By Job Id
Route::post('/getJobById', 'Api\JobsController@getJobById');

//Get All Skills
Route::get('/getSkills', 'Api\CategoryController@getAllSkills');

/*Route::group(['middleware' => ['auth:api']], function () {
   //auth  urls..
    Route::get('/test', 'Api\MessageController@helloApi');
});*/
Route::get('/test', 'Api\MessageController@helloApi');
//Route::middleware('auth:api')->group(function(){
//    Route::get('/test', 'Api\MessageController@helloApi');
//});*/