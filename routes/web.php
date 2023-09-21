<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/admin/login', [AuthController::class,'adminLogin'])->name('admin.login');
Route::get('admin/login/github', [AuthController::class,'githubLogin'])->name('socialite.github');
Route::get('admin/github/callback', [AuthController::class,'githubCallback'])->name('socialite.github.callback');
Route::get('admin/login/twitter', [AuthController::class,'twitterLogin'])->name('socialite.twitter');
Route::get('admin/twitter/callback', [AuthController::class,'twitterCallback'])->name('socialite.twitter.callback');
Route::get('admin/google', [AuthController::class,'googleLogin'])->name('socialite.google');
Route::get('admin/google/callback', [AuthController::class,'googleCallback'])->name('socialite.google.callback');

Route::post('/admin/login', [AuthController::class,'adminAuthenticate'])->name('admin.authenticate');


Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [AuthController::class,'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/dashboard', [AuthController::class,'adminDashboard'])->name('admin.dashboard');
 

});