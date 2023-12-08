<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Models\Profile;
use App\Models\User;

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
    return view('welcome');
});
Route::view('layout','layout');

Route::resource('/note', App\Http\Controllers\NoteController::class);

Route::get('/user/login',[UserController::class,'login'])->name('user.login');
Route::get('/user/register',[UserController::class,'register'])->name('user.register');
Route::post('/user/save',[UserController::class, 'save'])->name('user.save');
Route::post('/user/check',[UserController::class, 'check'])->name('user.check');
Route::get('/user/logout',[UserController::class, 'logout'])->name('user.logout');
Route::get('/profile/dashboard',[UserController::class, 'dashboard'])->name('profile.dashboard');

 Route::group(['middleware'=>['AuthCheck']], function(){
    
    Route::get('/auth/dashboard',[UserController::class, 'dashboard']);
 });

Route::resource('/profile', App\Http\Controllers\ProfileController::class);
Route::resource('/notetype', App\Http\Controllers\NoteTypeController::class);

Route::get('/schedule/index',[EventController::class,'index'])->name('schedule.index');
Route::resource('/event', App\Http\Controllers\EventController::class);



