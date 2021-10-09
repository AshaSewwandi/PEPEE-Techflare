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

Route::get('/healthcenterspage', function () {
    return view('healthcenterspage');
});

Route::get('/addpost',[App\Http\Controllers\PostController::class,'addpost']);
Route::get('/viewpost',[App\Http\Controllers\PostController::class,'viewpost']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/AddMessage', [App\Http\Controllers\MessageController::class,'AddMessage']);

Route::get('/StoreMessage', [App\Http\Controllers\MessageController::class,'StoreMessage']);
