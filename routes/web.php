<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('em', function () {
    return view('components.product.detail');

});
Route::group([
    'prefix' => 'client',
    'as' => 'client.',
], function () {

    Route::get('/', [ClientController::class, 'index'])->name('index');
    //LOGIN, SIGNUP USER
    Route::get('Signup', [ClientController::class, 'getSignup'])->name('getSignup');
    Route::post('Signup', [ClientController::class, 'Signup'])->name('Signup');

    Route::get('Login', [ClientController::class, 'getLogin'])->name('getLogin');
    Route::post('Login', [ClientController::class, 'Login'])->name('Login');

    Route::get('Logout', [ClientController::class, 'Logout'])->name('Logout');
    //Product
    // Route::group([
    //     'prefix' => 'products',
    //     'as' => 'products.',
    // ], function () {
    //     Route::get('/', [ProductController::class, 'index'])->name('index');
    //     Route::get('detail/{id}', [ProductController::class, 'detail'])->name('detail');
    //     Route::post('add-to-cart', [ProductController::class, 'addToCart'])->name('addToCart');
    //     Route::get('cart', [ProductController::class, 'cart'])->name('cart');
    //     Route::post('update-cart', [ProductController::class, 'updateCart'])->name('updateCart');
    //     Route::delete('delete-cart/{id}', [ProductController::class, 'deleteCart'])->name('deleteCart');
    //     Route::post('checkout', [ProductController::class, 'checkout'])->name('checkout');
    // });




});
// Route::get('admin', function () {
//     return view('admin.layouts.home');
// });
// Route::get('login', function () {

//     return view('pages.login');
// });
//ADMIN
Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',

    ],
    function () {
        //Login Admin
        Route::get('/', [AuthController::class, 'getLogin'])->name('getLogin');
        Route::post('login', [AuthController::class, 'login'])->name('login');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        // Route::get('Signup', [AuthController::class, 'getSignup'])->name('getSignup');
        // Route::post('Signup', [AuthController::class, 'Signup'])->name('Signup');
    
        //CRUD  ADMIN/PRODUCT
        Route::group([
            'prefix' => 'products',
            'as' => 'products.',
            // 'middleware' => 'checkAdmin'
        ], function () {
            Route::get('list-product', [ProductController::class, 'listProduct'])->name('listProduct');
            //
            Route::get('add-product', [ProductController::class, 'addProduct'])->name('addProduct');
            Route::post('add-product', [ProductController::class, 'postProduct'])->name('postProduct');
            //
            Route::get('edit-product/{id}', [ProductController::class, 'editProduct'])->name('editProduct');
            Route::put('edit-product/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
            //
            Route::delete('delete-product/{productid}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
        });
        // CRUD  ADMIN/USER
        Route::group([
            'prefix' => 'users',
            'as' => 'users.',
            // 'middleware' => 'checkAdmin'
        ], function () {

            Route::get('list-user', [UserController::class, 'listUser'])->name('listUser');
            //
            Route::get('add-user', [UserController::class, 'addUser'])->name('addUser');
            Route::post('add-user', [UserController::class, 'postUser'])->name('postUser');
            //
            Route::get('edit-user/{id}', [UserController::class, 'editUser'])->name('editUser');
            Route::put('edit-user/{id}', [UserController::class, 'updateUser'])->name('updateUser');
            //
            Route::delete('delete-user/{userid}', [UserController::class, 'deleteUser'])->name('deleteUser');
        });
        Route::group([
            'prefix' => 'orders',
            'as' => 'orders.',
            // 'middleware' => 'checkAdmin'
        ], function () {

            Route::get('list-order', [OrderController::class, 'listOrder'])->name('listOrder');
            Route::get('detail-order/{id}', [OrderController::class, 'seeDetail'])->name('seeDetail');

            //
            Route::get('edit-order/{id}', [OrderController::class, 'editUser'])->name('editOrder');
            Route::put('edit-order/{id}', [OrderController::class, 'updateUser'])->name('updateOrder');
            //
            Route::delete('delete-order/{userid}', [OrderController::class, 'deleteUser'])->name('deleteOrder');
        });
    }
);