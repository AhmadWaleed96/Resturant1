<?php
<<<<<<< HEAD
use App\Http\Controllers\SellController;
=======

use App\Http\Controllers\AccountantController;
>>>>>>> 2456e93d1c4d653d18682123b2e419cd41c9a7a1
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookTableController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\QarsonController;
use App\Http\Controllers\RecepionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\WaiterController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\DB;

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
    return view('pages.home');
});

Route::prefix('cms/')->middleware('guest:admin')->group(function(){

    route::get('{guard}/Login' , [UserAuthController::class , 'Login'])->name('view.login');
    route::get('{guard}/showLogin' , [UserAuthController::class , 'showLogin'])->name('view.login');
    route::post('{guard}/showLogin' , [UserAuthController::class , 'showLogin']);
});

Route::prefix('cms/admin')->middleware('auth:admin')->group(function(){
    Route::get('profile/edit' , [UserAuthController::class , 'editProfile'])->name('cms.auth.profile-edit');
    Route::post('profile/update' , [UserAuthController::class , 'updateProfile'])->name('cms.auth.update-profile');
    Route::get('/logout' , [UserAuthController::class , 'Logout'])->name('cms.admin.logout');
});

Route::prefix('cms/admin/')->middleware('auth:admin')->group(function(){
    Route::view('', 'cms.parent');
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

    Route::resource('items' , itemController::class);
    Route::post('update_items/{id}' , [itemController::class , 'update'])->name('update_items');

    Route::resource('orders' , OrderController::class);
    Route::post('update_orders/{id}' , [OrderController::class , 'update'])->name('update_orders');
<<<<<<< HEAD
=======
    
    Route::resource('accountants' , AccountantController::class);
    Route::post('update_accountants/{id}' , [AccountantController::class , 'update'])->name('update_accountants');
>>>>>>> 2456e93d1c4d653d18682123b2e419cd41c9a7a1

});

 Route::prefix('pages/admin/')->group(function(){
    Route::view('master', 'pages.master');
    Route::view('book-order', 'pages.book-order');
    Route::view('delivery', 'pages.delivery')->name('restaurant.delivery');
    Route::view('home', 'pages.home')->name('restaurant.home');
    Route::view('login', 'pages.login');
    Route::view('one-page', 'pages.one-page');
    Route::view('qarson', 'pages.qarson');
    Route::view('sessions', 'pages.sessions');
<<<<<<< HEAD
    Route::view('sells', [SellController::class , 'order']);
    Route::resource('books', BookTableController::class);
=======
    Route::view('register', 'pages.registar');
>>>>>>> 2456e93d1c4d653d18682123b2e419cd41c9a7a1
});
