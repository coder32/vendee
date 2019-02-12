<?php


Route::get('/', 'Frontend\DashboardController@home');

Route::get('/home', function(){
    return redirect('/');
});


Route::get('login', function () {
    return view('auth.login');
});

Route::get('forget', function(){
    return view('auth.forget');
});


Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/wishlist','wishlistController@index');

Route::get('/reviews','reviewsController@index');

Route::get('/referralEarning','referralEarningController@index');
/*
Route::get('/products','productsController@index');*/

Route::get('/feedback','feedbackController@index');
Route::get('/privacy','privacyController@index');
Route::get('/terms','termsController@index');
Route::get('/faqs','faqController@index');
Route::get('/plans','planController@index');
Route::get('/trust','trustController@index');
Route::get('/about','aboutController@index');

Route::get('/contact','contactController@index');
Route::post('/contact','contactController@insert');

Route::get('/guide','guideController@index');
Route::get('/feedback','feedbackController@index');
Route::post('/feedback','feedbackController@insert');
// Front Pages


Route::get('category', 'Frontend\CategoryController@index');
Route::get('/detailCategory/{id}','Frontend\CategoryController@detailCategory');

Route::get('/products','Frontend\ProductController@index');
Route::get('/detailProduct/{id}','Frontend\ProductController@detailProduct');


//owner

Route::get('/Owner/order','Frontend\OwnerController@ownerOrder');

Route::get('/Owner/profile','Frontend\OwnerController@ownerProfile');
Route::get('/Owner/updateProfile', 'Frontend\OwnerController@profileUpdate');
Route::post('/Owner/updateProfiles','Frontend\OwnerController@updateProfiles');

Route::get('/Owner/store','Frontend\OwnerController@ownerStore');
Route::post('/Owner/store','Frontend\OwnerController@updateStore');

Route::get('/Owner/brand','Frontend\OwnerController@ownerBrand');
Route::get('/Owner/addBrand','Frontend\OwnerController@addBrand');
Route::post('/Owner/addBrand','Frontend\OwnerController@addBrands');
Route::get('/Owner/deleteBr/{id}','Frontend\OwnerController@destroyBrand');


Route::get('/Owner/attribute','Frontend\OwnerController@ownerAttribute');
Route::get('/Owner/addAttribute','Frontend\OwnerController@addAttribute');
Route::post('/Owner/addAttribute','Frontend\OwnerController@addAttributes');
Route::get('/Owner/deleteAttri/{id}','Frontend\OwnerController@destroyAttribute');


Route::get('/Owner/category','Frontend\OwnerController@ownerCategory');
Route::get('/Owner/addCategory','Frontend\OwnerController@addCategory');
Route::post('/Owner/addCategory','Frontend\OwnerController@addCategorys');
Route::get('/Owner/destroyCatri/{id}','Frontend\OwnerController@destroyCategory');


Route::get('/Owner/subCategory','Frontend\OwnerController@ownerSubCategory');
Route::get('/Owner/addSubCategory','Frontend\OwnerController@addSubCategory');
Route::post('/Owner/addSubCategory','Frontend\OwnerController@addSubCategorys');
Route::get('/Owner/destroySubCatri/{id}','Frontend\OwnerController@destroySubCategory');

Route::get('/Owner/childCategory','Frontend\OwnerController@ownerChildCategory');
Route::get('/Owner/addChildCategory','Frontend\OwnerController@addChildCategory');
Route::post('/Owner/addChildCategory','Frontend\OwnerController@addChildCategorys');
Route::get('/Owner/destroyChildCatri/{id}','Frontend\OwnerController@destroyChildCategory');



Route::get('/Owner/product','Frontend\OwnerController@ownerProduct');
Route::get('/Owner/addProduct','Frontend\OwnerController@addProduct');
Route::post('/Owner/addProduct','Frontend\OwnerController@addProducts');
Route::get('/Owner/deletePro/{id}','Frontend\OwnerController@destroyProduct');
Route::get('/Owner/detailProduct/{id}', 'Frontend\OwnerController@detailProduct');


//Customer


Route::get('/customer/profile','Frontend\CustomerController@customerProfile');
Route::get('/customer/updateProfile', 'Frontend\CustomerController@profileUpdate');
Route::post('/customer/updateProfiles','Frontend\CustomerController@updateProfiles');


// Add to cart

Route::get('/customer/cart','Frontend\CustomerController@cartView');
Route::get('add-to-cart/{id}', 'Frontend\CustomerController@addToCart');
Route::patch('update-cart', 'Frontend\CustomerController@update');
Route::delete('remove-from-cart', 'Frontend\CustomerController@remove');
Route::post('/customer/cart','Frontend\CustomerController@addCart');

// Order Detail

Route::get('/customer/order','Frontend\CustomerController@orderView');






Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('users', 'UserController@index')->name('users.index');
    Route::get('users/{to_user}/messages', 'MessageController@index')->name('users.chat-messages');



});

Route::group(['prefix' => USERS, 'as' => USERS . '.', 'middleware'=>['auth']], function() {


    Route::get('/profile','Frontend\ProfileController@index');
    Route::get('/', ['uses'=>'Frontend\DashboardController@index', 'as'=>'dash']);

    //Owner


});



//GOOGLE OAUTH URLS
Route::get('google', function () {
    return view('googleAuth');
});
Route::get('auth/google', 'Auth\AuthController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\AuthController@handleGoogleCallback');
//GOOGLE OAUTH URL ENDS

//FACEBOOK PAUTH URLS
Route::get('facebook', function () {
    return view('facebook');
});
Route::get('auth/facebook', 'Auth\AuthController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleFacebookCallback');
//FACEBOOK OAUTH URL ENDS





/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/

Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth']], function() {

    Route::get('users/all', 'UserController@showAllUsers');
    Route::get('users/pending/all', 'UserController@showAllPendingUsers');
    Route::get('users/disabled/all', 'UserController@showAllDisabledUsers');


    Route::get('/', ['uses'=>'DashboardController@index', 'as'=>'dash']);
    Route::post('/dashboard',  'DashboardController@mailSend');


    Route::resource('users', 'UserController');//->middleware('Role:Superadmin|Admin');
    Route::get('profileedit/{id}', 'ProfileController@edit');
    Route::put('profileupdate/{id}', 'ProfileController@update');
    Route::get('/verify/profile/{id}', 'ProfileController@verifyProfile');
    Route::get('updatePassword', 'ProfileController@pass');
    Route::post('/updatePassword','ProfileController@changePassword');





    //ContactUs
    Route::get('/contactus', ['uses'=>'contactController@View', 'as'=> 'contactus']);
    //Feedback
    Route::get('/feedback', ['uses'=>'feedbackController@View', 'as'=> 'feedback']);
    //Roles
    Route::get('/roles', ['uses'=>'RoleController@index', 'as'=> 'roles']);
    Route::post('/roles', ['uses'=>'RoleController@update', 'as'=> 'roles']);
    //Logs
    Route::get('/logs', ['uses'=>'ActivityLogsController@index', 'as'=> 'logs']);


    //Manager
    Route::get('/manager', ['uses'=>'ManagerController@index', 'as'=>'manager.index']);
    Route::get('/manager/insert', 'ManagerController@createView');
    Route::post('/manager/insert', ['uses' => 'ManagerController@create', 'as'=>'manager.insert']);
    Route::get('/manager/deleteMan/{id}','ManagerController@destroy');
    Route::get('/manager/detailManager/{id}', 'ManagerController@managerView');
    Route::get('/manager/updateManager/{id}', 'ManagerController@managerUpdate');
    Route::post('/manager/managerUpdates','ManagerController@managerUpdates');

    //Owner
    Route::get('/owner', ['uses'=>'OwnerController@index', 'as'=>'owner.index']);
    Route::get('/owner/detailOwner/{id}', 'ownerController@ownerView');

    //Owner
    Route::get('/customer', ['uses'=>'CustomerController@index', 'as'=>'customer.index']);
    Route::get('/customer/detailCustomer/{id}', 'CustomerController@customerView');




    //Moderator
    Route::get('/moderator', ['uses'=>'ModeratorController@index', 'as'=>'moderator.index']);
    Route::get('/moderator/create/view', 'ModeratorController@createView');
    Route::post('/moderator/create', ['uses' => 'ModeratorController@create', 'as'=>'moderator.create']);
    Route::get('/moderator/deleteMod/{id}','ModeratorController@destroy');
    Route::get('/moderator/detailModerator/{id}', 'ModeratorController@moderatorView');
    Route::get('/moderator/updateModerator/{id}', 'ModeratorController@moderatorUpdate');
    Route::post('/moderator/moderatorUpdates','ModeratorController@moderatorUpdates');



    //Store
    Route::get('/store', ['uses'=>'StoreController@index', 'as'=>'store.index']);
    Route::get('/store/deleteSt/{id}','StoreController@destroyStore');
    Route::get('/store/addStore','StoreController@addData');
    Route::post('/store/addStore','StoreController@AddStore');
    Route::get('/store/updateStore/{id}', 'StoreController@storeUpdate');
    Route::post('/store/updateStore','StoreController@storeUpdates');

    //Product
    Route::get('/product', ['uses'=>'ProductController@index', 'as'=>'product.index']);
    Route::get('/product/detailProduct/{id}', 'ProductController@productView');
    Route::get('/product/deletePr/{id}','ProductController@destroyProduct');
    Route::get('/product/addProduct','ProductController@addData');
    Route::post('/product/addProduct','ProductController@AddProduct');
    Route::get('/product/updateProduct/{id}', 'ProductController@productUpdate');
    Route::post('/product/updateProduct','ProductController@productUpdates');


    //Category
    Route::get('/category', ['uses'=>'CategoryController@index', 'as'=>'category.index']);
    Route::get('/category/detailCategory/{id}', 'CategoryController@categoryView');
    Route::get('/category/deleteCa/{id}','CategoryController@destroyCategory');
    Route::get('/category/addCategory','CategoryController@addData');
    Route::post('/category/addCategory','CategoryController@AddCategory');
    Route::get('/category/updateCategory/{id}', 'CategoryController@categoryUpdate');
    Route::post('/category/updateCategory','CategoryController@categoryUpdates');

    //SubCategory
    Route::get('/subCategory', ['uses'=>'SubCategoryController@index', 'as'=>'subCategory.index']);
    Route::get('/subCategory/detailSubCategory/{id}', 'SubCategoryController@subCategoryView');
    Route::get('/subCategory/deleteSubCa/{id}','SubCategoryController@destroySubCategory');
    Route::get('/subCategory/addSubCategory','SubCategoryController@addData');
    Route::post('/subCategory/addSubCategory','SubCategoryController@AddSubCategory');
    Route::get('/subCategory/updateSubCategory/{id}', 'SubCategoryController@SubCategoryUpdate');
    Route::post('/subCategory/updateSubCategory','SubCategoryController@SubCategoryUpdates');


    //ChildCategory
    Route::get('/childCategory', ['uses'=>'ChildCategoryController@index', 'as'=>'childCategory.index']);
    Route::get('/childCategory/detailChildCategory/{id}', 'ChildCategoryController@childCategoryView');
    Route::get('/childCategory/deleteChildCa/{id}','ChildCategoryController@destroyChildCategory');
    Route::get('/childCategory/addChildCategory','ChildCategoryController@addData');
    Route::post('/childCategory/addChildCategory','ChildCategoryController@AddChildCategory');
    Route::get('/childCategory/updateChildCategory/{id}', 'ChildCategoryController@ChildCategoryUpdate');
    Route::post('/childCategory/updateChildCategory','ChildCategoryController@ChildCategoryUpdates');

 //Attribute
    Route::get('/attribute', ['uses'=>'AttributeController@index', 'as'=>'attribute.index']);
    Route::get('/attribute/detailAttribute/{id}', 'AttributeController@attributeView');
    Route::get('/attribute/deleteAt/{id}','AttributeController@destroyAttribute');
    Route::get('/attribute/addAttribute','AttributeController@addData');
    Route::post('/attribute/addAttribute','AttributeController@AddAttribute');
    Route::get('/attribute/updateAttribute/{id}', 'AttributeController@attributeUpdate');
    Route::post('/attribute/updateAttribute','AttributeController@attributeUpdates');

  //Brand
    Route::get('/brand', ['uses'=>'BrandController@index', 'as'=>'brand.index']);
    Route::get('/brand/detailBrand/{id}', 'BrandController@brandView');
    Route::get('/brand/deleteBr/{id}','BrandController@destroyBrand');
    Route::get('/brand/addBrand','BrandController@addData');
    Route::post('/brand/addBrand','BrandController@AddBrand');
    Route::get('/brand/updateBrand/{id}', 'BrandController@brandUpdate');
    Route::post('/brand/updateBrand','BrandController@brandUpdates');


    //User Bill
    Route::get('/UserBill', ['uses'=>'UserBillController@index', 'as'=>'UserBill.index']);
    Route::get('/UserBill/detailBill/{id}', 'UserBillController@billView');




    //Setting
    Route::get('/settings', ['uses' => 'SettingController@index', 'as'=>'setting']);
    Route::post('/question/post', 'SettingController@postQuestion');
    Route::post('question/update', 'SettingController@updateQuestion');
    Route::get('/question/destroy/{id}', 'SettingController@distroyQuestion');


});