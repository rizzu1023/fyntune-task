<?php

use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/blog/{blog_id}',[\App\Http\Controllers\HomeController::class,'show']);


Route::group(['prefix' => 'admin','middleware' => ['auth']],function(){
    Route::resource('/blogs',\App\Http\Controllers\BlogController::class);
});


