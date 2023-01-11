<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

/*Route::get('/', function () {
    return view('Pages.index');
});
*/

// To home page
Route::get('/',[App\Http\Controllers\PagesController::class,'Home'])->name ('Home');

//To home about page

Route::get('/About',[App\Http\Controllers\PagesController::class,'About'])->name ('About');

//To home contact page

Route::get('/Contact',[App\Http\Controllers\PagesController::class,'Contact'])->name ('Contact');

//Resource for Posts
Route::resource('/blog', PostsController::class);
Auth::routes();

Route::get('/Dashboard', [App\Http\Controllers\DashboardController::class, 'redirect'])->name('Dashboard');
