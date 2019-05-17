<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

Auth::routes();

Route::get('/user/registration', 'HomeController@registration');
Route::post('/user/registration/save', 'HomeController@registrationSave');
Route::get('/user/confirm/{id}', 'HomeController@confirmMail');

Route::get('/user/forget-pass', 'HomeController@forgetPass');


Route::get('/home', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::post('/login-check', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');


Route::get('/admin-home', function () {
    if (!Auth::check()) {
        return view('login');
    } else {
        $unseen_notifications = User::get();
       $unseen_replacement_notifications = null;
        $posts = Post::count();
        $authors = User::count();
        $published_count = Post::where('post_publish_status',true)->count();
        $all_post = Post::orderBy('created_at','DESC')->limit(10)->get();
        return view('pages.home.index')
            ->with('unseen_notifications', $unseen_notifications)
            ->with('posts', $posts)
            ->with('authors', $authors)
            ->with('published_count', $published_count)
            ->with('all_post', $all_post)
            ->with('unseen_replacement_notifications', $unseen_replacement_notifications);
    }

});


// routes/web.php
Route::group([], function () {
    //Manage Users
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/store', 'UserController@store');
    Route::get('/user/show', 'UserController@show');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::post('/user/update', 'UserController@update');
    Route::get('/user/destroy/{id}', 'UserController@destroy');
    Route::get('/user/account-activate', 'UserController@accountActivate');


    Route::get('/user/deactive/{id}', 'UserController@deactivate');
    Route::get('/user/active/{id}', 'UserController@activate');


    //Manage Post
    Route::get('/post/create', 'PostController@create');
    Route::post('/post/store', 'PostController@store');
    Route::get('/post/show', 'PostController@show');
    Route::get('/post/edit/{id}', 'PostController@edit');
    Route::post('/post/update', 'PostController@update');
    Route::get('/post/destroy/{id}', 'PostController@destroy');
    Route::get('/post/publish/{id}', 'PostController@publish');
    Route::get('/post/unpublish/{id}', 'PostController@unpublish');


//Profile
    Route::get('/user/profile', 'SettingController@profile');
    Route::get('/user/profile/edit', 'SettingController@editProfile');
    Route::post('/user/profile/update', 'SettingController@updateProfile');

});

//General
Route::get('/', 'HomeController@homepage');
Route::get('/category/{cat_name}', 'HomeController@categoryPost');
Route::get('/author/{aut_id}', 'HomeController@authorPost');
Route::get('/privacy', 'HomeController@privacy');
Route::get('/terms-and-condition', 'HomeController@terms');
Route::get('/contact', 'HomeController@contact');




