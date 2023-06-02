<?php

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

Route::group(['namespace' => 'App\Http\Controllers\User'], function () {
    Route::get('/users', 'IndexController')->name('users.index');
    Route::get('/users/create', 'CreateController')->name('users.create');
    Route::post('/users', 'StoreController')->name('users.store');
    Route::get('/users/{user}', 'ShowController')->name('users.show');
    Route::get('/users/{user}/edit', 'EditController')->name('users.edit');
    Route::patch('/users/{user}', 'UpdateController')->name('users.update');
    Route::delete('/users/{user}', 'DestroyController')->name('users.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\BlogPost'], function () {
    Route::get('/blog_posts', 'IndexController')->name('blog_posts.index');
    Route::get('/blog_posts/create', 'CreateController')->name('blog_posts.create');
    Route::post('/blog_posts', 'StoreController')->name('blog_posts.store');
    Route::get('/blog_posts/{post}', 'ShowController')->name('blog_posts.show');
    Route::get('/blog_posts/{post}/edit', 'EditController')->name('blog_posts.edit');
    Route::patch('/blog_posts/{post}', 'UpdateController')->name('blog_posts.update');
    Route::delete('/blog_posts/{post}', 'DestroyController')->name('blog_posts.destroy');
});
