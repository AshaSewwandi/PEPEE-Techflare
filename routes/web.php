<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AnimalController;

//landing page routes
Route::get('/', function () {
    return view('landingpage');
});

//tips page route
Route::get('/tipspage', function () {
    return view('tipspage');
});

//pet care center routes
Route::get('/petcarepage', function () {
    return view('healthcenterspage');
});

// Route::get('/add', function () {
//     return view('addnewpost');
// });

// posts routes
Route::get('/Addpost/{id}',[App\Http\Controllers\PostController::class,'Addpost']);
Route::post('/StorePost',[App\Http\Controllers\PostController::class,'StorePost']);
Route::get('/StoreUser',[App\Http\Controllers\UserController::class,'StoreUser']);
Route::get('/viewpost',[App\Http\Controllers\PostController::class,'viewpost']);
Route::get('/showpost',[App\Http\Controllers\PostController::class,'showpost']);
Route::get('/show/{id}',[App\Http\Controllers\PostController::class,'show']);
// Route::get('/show/{id}',[App\Http\Controllers\HomeController::class,'show']);
Route::get('/deletepost/{post_id}', [App\Http\Controllers\PostController::class, 'delete']);
Route::get('/editpost/{post_id}', [App\Http\Controllers\PostController::class,'edit']);
Route::post('/updatePost',[App\Http\Controllers\PostController::class,'updatePost']);

Route::get('/Viewpost',[App\Http\Controllers\PostController::class,'viewLatestpost']);
Route::get('/viewpost',[App\Http\Controllers\PostController::class,'viewOldestpost']);

Route::get('/FilterPost',[App\Http\Controllers\PostController::class,'filterByType']);
Route::get('/filterPost',[App\Http\Controllers\PostController::class,'filterByTypes']);

Route::get('/FilterLocationC',[App\Http\Controllers\AnimalController::class,'filterByLocationC']);
Route::get('/FilterLocationK',[App\Http\Controllers\AnimalController::class,'filterByLocationK']);
Route::get('/FilterLocationG',[App\Http\Controllers\AnimalController::class,'filterByLocationG']);

//authentication routes
Auth::routes();
Route::get('/forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail');
Route::post('/forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail');
Route::get('/reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('/reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//message routes
Route::get('/AddMessage', [App\Http\Controllers\MessageController::class,'AddMessage']);
Route::get('/StoreMessage', [App\Http\Controllers\MessageController::class,'StoreMessage']);

// edit profile
Route::get('/editprofile/{id}', [App\Http\Controllers\UserController::class,'edit']);
Route::post('/updateprofile', [App\Http\Controllers\UserController::class,'update']);
Route::get('/close', [App\Http\Controllers\UserController::class,'index']);

//Route::post('/updateprofile', [App\Http\Controllers\UserController::class,'create']);
//Route::get('/add', [App\Http\Controllers\PostController::class,'addPostById']);

