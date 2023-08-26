<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;


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



//Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
//    Route::get('/', AdminController::class);
//});

Route::name('main.')->group(function() {
    Route::get('/', IndexController::class);
});

Route::prefix('admin')->group(function (){
    Route::name('main')->group(function() {
        Route::get('/', AdminController::class);
    });
    Route::name('main')->group(function() {
        Route::get('/', AdminController::class);
    });

 // РАБОТАЕТ
//    Route::prefix('categories')->group(function () {
//        Route::name('category')->group(function () {
//            Route::get('/', function (){
//                return 2222222;
//            });
//        });
//    });

    // РАБОТАЕТ

//    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
//        Route::get('/', CategoryController::class);
//    });

        Route::prefix('categories')->group(function () {
        Route::name('category')->group(function () {
            Route::get('/', CategoryController::class);
            });
        });


});












Auth::routes();



