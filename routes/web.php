<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/tipspage', function () {
    return view('tipspage');
});

Route::get('/petcarepage', function () {
    return view('healthcenterspage');
});

Route::get('/Addpost/{id}',[App\Http\Controllers\PostController::class,'Addpost']);
Route::post('/StorePost',[App\Http\Controllers\PostController::class,'StorePost']);
Route::get('/StoreUser',[App\Http\Controllers\UserController::class,'StoreUser']);
Route::get('/viewpost',[App\Http\Controllers\PostController::class,'viewpost']);
Route::get('/showpost',[App\Http\Controllers\PostController::class,'showpost']);
Route::get('/show/{id}',[App\Http\Controllers\PostController::class,'show']);
Route::get('/show/{id}',[App\Http\Controllers\HomeController::class,'show']);

Auth::routes();

Route::get('/forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail');
Route::post('/forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail');

Route::get('/reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('/reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/AddMessage', [App\Http\Controllers\MessageController::class,'AddMessage']);

Route::get('/StoreMessage', [App\Http\Controllers\MessageController::class,'StoreMessage']);

Route::get('/viewpost',[App\Http\Controllers\AnimalController::class,'viewpost']);

// edit profile
Route::get('/editprofile/{id}', [App\Http\Controllers\UserController::class,'edit']);
Route::post('/updateprofile', [App\Http\Controllers\UserController::class,'update']);
Route::get('/close', [App\Http\Controllers\UserController::class,'index']);
//Route::post('/updateprofile', [App\Http\Controllers\UserController::class,'create']);
