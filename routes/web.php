<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotiController;
use App\Http\Controllers\ForgotPasswordController;

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

Route::group(['middleware'=>['AuthCheck']], function()
{
    Route::get('/user/login',[UserController::class,'login'])->name('user.login');
    Route::get('/user/register',[UserController::class,'register'])->name('user.register');
    Route::get('/user/logout',[UserController::class, 'logout'])->name('user.logout');

    Route::get('/profile/dashboard',[ProfileController::class, 'dashboard'])->name('profile.dashboard');
    Route::get('/profile/view',[ProfileController::class, 'view'])->name('profile.view');
});

Route::resource('/note', App\Http\Controllers\NoteController::class);

// Route::get('/user/login',[UserController::class,'login'])->name('user.login');
// Route::get('/user/register',[UserController::class,'register'])->name('user.register');
Route::post('/user/save',[UserController::class, 'save'])->name('user.save');
Route::post('/user/check',[UserController::class, 'check'])->name('user.check');
// Route::get('/user/logout',[UserController::class, 'logout'])->name('user.logout');

// Route::get('/profile/dashboard',[ProfileController::class, 'dashboard'])->name('profile.dashboard');
// Route::get('/profile/view',[ProfileController::class, 'view'])->name('profile.view');

Route::resource('/profile', App\Http\Controllers\ProfileController::class);
Route::resource('/notetype', App\Http\Controllers\NoteTypeController::class);

Route::get('/schedule/index',[EventController::class,'index'])->name('schedule.index');
Route::get('/noti/index',[NotiController::class,'noti'])->name('noti.index');
Route::resource('/event', App\Http\Controllers\EventController::class);
Route::post('/send',[NotiController::class, 'send'])->name('send.email');

Route::get('/password/forgotpassword',[ForgotPasswordController::class,'forgotPassword'])->name('password.forgotpassword');
Route::post('/password/forgotpassword',[ForgotPasswordController::class,'forgotPasswordPost'])->name('password.forgotpassword.post');
Route::get('/password/resetpassword/{token}',[ForgotPasswordController::class,'resetPassword'])->name('password.resetpassword');
Route::post('/password/resetpassword',[ForgotPasswordController::class,'resetPasswordPost'])->name('password.resetpassword.post');

Route::post('/profile/dashboard', [ProfileController::class,'update_password'])->name('update_password');


