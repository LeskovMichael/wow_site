<?php

use App\Http\Controllers\AccountController;
use App\Models\BlogPost;
use App\Models\User;
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
Route::get('/', function () {
    return view('home');
});

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'authorized'], function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
});

Route::group(['namespace' => 'App\Http\Controllers\User', 'middleware' => 'authorized'], function () {
    Route::get('/users', 'IndexController')
        ->middleware('can:viewAny,'.User::class)->name('users.index');
    Route::get('/users/create', 'CreateController')
        ->middleware('can:create,'.User::class)->name('users.create');
    Route::post('/users', 'StoreController')
        ->middleware('can:create,'.User::class)->name('users.store');
    Route::get('/users/{user}', 'ShowController')
        ->middleware('can:view,user')->name('users.show');
    Route::get('/users/{user}/edit', 'EditController')
        ->middleware('can:update,user')->name('users.edit');
    Route::patch('/users/{user}', 'UpdateController')
        ->middleware('can:update,user')->name('users.update');
    Route::delete('/users/{user}', 'DestroyController')
        ->middleware('can:delete,user')->name('users.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\BlogPost', 'middleware' => 'authorized'], function () {
    Route::get('/blog_posts', 'IndexController')
        ->middleware('can:viewAny,'.BlogPost::class)->name('blog_posts.index');
    Route::get('/blog_posts/create', 'CreateController')
        ->middleware('can:create,'.BlogPost::class)->name('blog_posts.create');
    Route::post('/blog_posts', 'StoreController')
        ->middleware('can:create,'.BlogPost::class)->name('blog_posts.store');
    Route::get('/blog_posts/{blog_post}', 'ShowController')
        ->middleware('can:view,blog_post')->name('blog_posts.show');
    Route::get('/blog_posts/{blog_post}/edit', 'EditController')
        ->middleware('can:update,blog_post')->name('blog_posts.edit');
    Route::patch('/blog_posts/{blog_post}', 'UpdateController')
        ->middleware('can:update,blog_post')->name('blog_posts.update');
    Route::delete('/blog_posts/{blog_post}', 'DestroyController')
        ->middleware('can:delete,blog_post')->name('blog_posts.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'admin'], function () {
    Route::get('/admin/index', 'IndexController')->name('admin.index');
//    Route::group(['namespace' => 'BlogPost', 'middleware' => 'admin'], function () {
//        Route::get('/admin/blog_posts', 'IndexController')->name('admin.blog_posts.index');
//        Route::get('/admin/blog_posts/create', 'CreateController')->name('admin.blog_posts.create');
//        Route::post('/admin/blog_posts', 'StoreController')->name('admin.blog_posts.store');
//        Route::get('/admin/blog_posts/{blog_post}', 'ShowController')->name('admin.blog_posts.show');
//        Route::get('/admin/blog_posts/{blog_post}/edit', 'EditController')->name('admin.blog_posts.edit');
//        Route::patch('/admin/blog_posts/{blog_post}', 'UpdateController')->name('admin.blog_posts.update');
//        Route::delete('/admin/blog_posts/{blog_post}', 'DestroyController')->name('admin.blog_posts.destroy');
//    });
//    Route::group(['namespace' => 'User', 'middleware' => 'admin'], function () {
//        Route::get('/admin/users', 'IndexController')->name('admin.users.index');
//        Route::get('/admin/users/create', 'CreateController')->name('admin.users.create');
//        Route::post('/admin/users', 'StoreController')->name('admin.users.store');
//        Route::get('/admin/users/{user}', 'ShowController')->name('admin.users.show');
//        Route::get('/admin/users/{user}/edit', 'EditController')->name('admin.users.edit');
//        Route::patch('/admin/users/{user}', 'UpdateController')->name('admin.users.update');
//        Route::delete('/admin/users/{user}', 'DestroyController')->name('admin.users.destroy');
//    });
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
