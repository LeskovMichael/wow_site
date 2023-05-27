<?php

use App\Http\Controllers\WowUserController;
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
    return view('welcome');
});

// comment
Route::get('/wow_users', [WowUserController::class, 'index'])->name('wow_users.index');
Route::get('/wow_users/create', [WowUserController::class, 'create'])->name('wow_users.create');
Route::post('/wow_users', [WowUserController::class, 'store'])->name('wow_users.store');
Route::get('/wow_users/{wow_user}', [WowUserController::class, 'show'])->name('wow_users.show');
Route::get('/wow_users/&&&/edit', [WowUserController::class, 'edit'])->name('wow_users.edit');
Route::put('/wow_users/&&&', [WowUserController::class, 'update'])->name('wow_users.update');
Route::delete('/wow_users/&&&', [WowUserController::class, 'destroy'])->name('wow_users.destroy');
