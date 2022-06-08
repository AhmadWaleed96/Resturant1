<?php

use App\Http\Controllers\KitchenController;
use App\Http\Controllers\WaiterController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('cms/admin/')->group(function(){
    Route::view('parent', 'cms.parent');
    Route::view('test' , 'cms.test');
    Route::resource('kitchens' , KitchenController::class);
    Route::resource('waiters' , WaiterController::class);
    Route::post('update_waiters/{id}' , [WaiterController::class , 'update'])->name('update_waiters');
    
 });
 Route::prefix('pages/admin/')->group(function(){
    Route::view('master', 'pages.master');
    Route::view('book-order', 'pages.book-order');
    Route::view('delivery', 'pages.delivery');
    Route::view('home', 'pages.home');
    Route::view('login', 'pages.login');
    Route::view('one-page', 'pages.one-page');
    Route::view('pirate', 'pages.pirate');
    Route::view('sessions', 'pages.sessions');
 });