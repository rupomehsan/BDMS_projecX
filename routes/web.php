<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\historyController;
use App\Http\Controllers\Admin\profileController;
use App\Http\Controllers\Admin\postController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\registrationController;

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
Route::middleware('guest')->group(function () {
    Route::get('/login',[loginController::class,'index'])->name('login');
    Route::post('/login',[loginController::class,'create'])->name('login.create');
    Route::get('/registration',[registrationController::class,'index'])->name('registration.index');
    Route::post('/registration',[registrationController::class,'store'])->name('registration.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [loginController::class, 'logout'])->name('logout');
    Route::get('/',[dashboardController::class,'index'])->name('dashboard.index');
    Route::get('/user/{id}',[dashboardController::class,'user']);
    Route::post('/user/apply',[dashboardController::class,'user_apply'])->name('user.apply');
    Route::get('/history',[historyController::class,'index'])->name('history.index');
    Route::get('/profile',[profileController::class,'index'])->name('profile.index');
    Route::patch('/profile/update/{id}',[profileController::class,'update'])->name('profile.update');
    Route::get('/posts',[postController::class,'index'])->name('posts.index');
    Route::post('/posts',[postController::class,'store'])->name('posts.store');

    // Route::resource('posts', postController::class);

});



