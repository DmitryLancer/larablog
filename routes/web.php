<?php

use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\DeleteController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\UpdateController;
use App\Http\Controllers\Admin\Main\IndexController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category\PostController;
use App\Http\Controllers\Admin\Tag\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;




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

 // РАБОЧИЙ РОУТ

//Route::name('main.')->group(function() {
//    Route::get('/', TagController::class);
//});
//
//
//
//
//Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
//    Route::group(['namespace' => 'Main'], function () {
//        Route::get('/', [TagController::class])->name('admin.index');
//    });
//
//    Route::group(['namespace' => 'App\Http\Controllers\Category', 'prefix' => 'category'], function () {
//        Route::get('/', TagController::class)->name('admin.category.index');
//        Route::get('/create', CreateController::class)->name('admin.category.create');
//        Route::post('/', StoreController::class)->name('admin.category.store');
//        Route::get('/{category}', ShowController::class)->name('admin.category.show');
//        Route::get('/{category}/edit', EditController::class)->name('admin.category.edit');
//        Route::patch('/{category}', UpdateController::class)->name('admin.category.update');
//        Route::delete('/{category}', DeleteController::class)->name('admin.category.delete');
//    });
//
//    Route::group(['namespace' => 'App\Http\Controllers\Tag', 'prefix' => 'tags'], function () {
//        Route::get('/', TagController::class)->name('admin.tag.index');
//        Route::get('/create', CreateController::class)->name('admin.tag.create');
//        Route::post('/', StoreController::class)->name('admin.tag.store');
//        Route::get('/{tag}', ShowController::class)->name('admin.tag.show');
//        Route::get('/{tag}/edit', EditController::class)->name('admin.tag.edit');
//        Route::patch('/{tag}', UpdateController::class)->name('admin.tag.update');
//        Route::delete('/{tag}', DeleteController::class)->name('admin.tag.delete');
//    });
//
//
//});
//
//
//Route::prefix('admin')->group(function (){
//    Route::name('main')->group(function() {
//        Route::get('/', AdminController::class);
//    });
//});

// РАБОЧИЙ РОУТ






Route::name('main.')->group(function() {
    Route::get('/', IndexController::class);
});





Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [IndexController::class])->name('admin.index');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', Controllers\Admin\Post\PostController::class)->name('admin.post.index');
        Route::get('/create', Controllers\Admin\Post\CreateController::class)->name('admin.post.create');
        Route::post('/', Controllers\Admin\Post\StoreController::class)->name('admin.post.store');
        Route::get('/{post}', Controllers\Admin\Post\ShowController::class)->name('admin.post.show');
        Route::get('/{post}/edit', Controllers\Admin\Post\EditController::class)->name('admin.post.edit');
        Route::patch('/{post}', Controllers\Admin\Post\UpdateController::class)->name('admin.post.update');
        Route::delete('/{post}', Controllers\Admin\Post\DeleteController::class)->name('admin.post.delete');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/', Controllers\Admin\Category\CategoryController::class)->name('admin.category.index');
        Route::get('/create', Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
        Route::post('/', Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
        Route::get('/{category}', Controllers\Admin\Category\ShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
        Route::patch('/{category}', Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', Controllers\Admin\Category\DeleteController::class)->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', Controllers\Admin\Tag\TagController::class)->name('admin.tag.index');
        Route::get('/create', Controllers\Admin\Tag\CreateController::class)->name('admin.tag.create');
        Route::post('/', Controllers\Admin\Tag\StoreController::class)->name('admin.tag.store');
        Route::get('/{tag}', Controllers\Admin\Tag\ShowController::class)->name('admin.tag.show');
        Route::get('/{tag}/edit', Controllers\Admin\Tag\EditController::class)->name('admin.tag.edit');
        Route::patch('/{tag}', Controllers\Admin\Tag\UpdateController::class)->name('admin.tag.update');
        Route::delete('/{tag}', Controllers\Admin\Tag\DeleteController::class)->name('admin.tag.delete');
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
//    Route::prefix('category')->group(function () {
//        Route::name('category')->group(function () {
//            Route::get('/', function (){
//                return 2222222;
//            });
//        });
//    });

    // РАБОТАЕТ

//    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
//        Route::get('/', TagController::class);
//    });
   // ЭТО РАБОТАЕТ ВНИЗУ !!!
//        Route::prefix('category')->group(function () {
//        Route::name('category')->group(function () {
//            Route::get('/', TagController::class)->name('category.index');
//            });
//        });


//    Route::prefix('category')->group(function () {
//        Route::name('category')->group(function () {
//            Route::get('/', [App\Http\Controllers\Admin\Category\TagController::class])->name('category.index');
//        });
//    });















Auth::routes();



