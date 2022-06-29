<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookTableController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\QarsonController;
use App\Http\Controllers\RecepionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\WaiterController;
use GuzzleHttp\Middleware;
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
    return view('cms.Auth.login');
});


Route::prefix('cms/')->middleware('guest:admin,qarson')->group(function(){
    route::get('{guard}/login' , [UserAuthController::class , 'showLogin'])->name('view.login');
    route::post('{guard}/login' , [UserAuthController::class , 'Login']);
});
Route::prefix('cms/admin')->middleware('auth:admin,qarson')->group(function(){
    Route::get('profile/edit' , [UserAuthController::class , 'editProfile'])->name('cms.auth.profile-edit');
    Route::post('profile/update' , [UserAuthController::class , 'updateProfile'])->name('cms.auth.update-profile');
    Route::get('/logout' , [UserAuthController::class , 'Logout'])->name('cms.admin.logout');
});

Route::prefix('cms/admin/')->middleware('auth:admin,qarson')->group(function(){
    Route::view('', 'cms.parent');
    Route::view('test' , 'cms.test');
    Route::resource('kitchens' , KitchenController::class);
    Route::resource('waiters' , WaiterController::class);
    Route::post('update_waiters/{id}' , [WaiterController::class , 'update'])->name('update_waiters');
    Route::resource('admins' , AdminController::class);
    Route::post('update_admins/{id}' , [AdminController::class , 'update'])->name('update_admins');
    Route::resource('recepions' , RecepionController::class);
    Route::post('update_recepions/{id}' , [RecepionController::class , 'update'])->name('update_recepions');
    Route::resource('booktables' , BookTableController::class);
    Route::post('update_booktables/{id}' , [BookTableController::class , 'update'])->name('update_booktable');

    Route::resource('cities' , CityController::class);
    Route::post('update_cities/{id}' , [CityController::class , 'update'])->name('update_cities');

    Route::resource('qarsons' , QarsonController::class);
    Route::post('update_qarsons/{id}' , [QarsonController::class , 'update'])->name('update_qarsons');

    Route::resource('roles', RoleController::class);
    Route::post('update_roles/{id}' , [RoleController::class , 'update'])->name('update_roles');
    Route::resource('permissions', PermissionController::class);
    Route::post('update_permissions/{id}' , [PermissionController::class , 'update'])->name('update_permissions');
    Route::resource('role.permissions', RolePermissionController::class);


});

 Route::prefix('pages/admin/')->group(function(){
    Route::view('master', 'pages.master');
    Route::view('book-order', 'pages.book-order');
    Route::view('delivery', 'pages.delivery');
    Route::view('home', 'pages.home');
    Route::view('login', 'pages.login');
    Route::view('one-page', 'pages.one-page');
    Route::view('waiter', 'pages.waiter');
    Route::view('sessions', 'pages.sessions');
});
