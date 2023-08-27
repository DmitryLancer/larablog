<?php

use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\UpdateController;
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


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [CategoryController::class])->name('admin.index');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', CategoryController::class)->name('admin.category.index');
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::post('/', StoreController::class)->name('admin.category.store');
        Route::get('/{category}', ShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', EditController::class)->name('admin.category.edit');
        Route::patch('/{category}', UpdateController::class)->name('admin.category.update');
    });
});

Route::prefix('admin')->group(function (){
    Route::name('main')->group(function() {
        Route::get('/', AdminController::class);
    });
});


//    Route::name('main')->group(function() {
//        Route::get('/', AdminController::class);
//    });

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
   // ЭТО РАБОТАЕТ ВНИЗУ !!!
//        Route::prefix('categories')->group(function () {
//        Route::name('category')->group(function () {
//            Route::get('/', CategoryController::class)->name('category.index');
//            });
//        });


//    Route::prefix('categories')->group(function () {
//        Route::name('category')->group(function () {
//            Route::get('/', [App\Http\Controllers\Admin\Category\CategoryController::class])->name('category.index');
//        });
//    });















Auth::routes();



