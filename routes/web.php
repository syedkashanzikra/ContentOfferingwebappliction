<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use  App\Http\Controllers\CreatorController;
use App\Http\Controllers\CreatorAuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContentController as AdminContentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/creator-form', [CreatorController::class, 'showForm'])->name('creator.form');
Route::post('/creator-form', [CreatorController::class, 'submitForm'])->name('creator.submit');

Route::get('/creator-login', [CreatorAuthController::class, 'showLoginForm'])->name('creator.login');
Route::post('/creator-login', [CreatorAuthController::class, 'login'])->name('creator.login.submit');


Route::get('/', [DashboardController::class, 'dashboard']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/become-creator', [RoleController::class, 'becomeCreator'])->name('become.creator');
    Route::get('/creator-dashboard', [DashboardController::class, 'creatordashboard'])->name('creater.dashboard');
    Route::resource('contents', ContentController::class);
});
Route::prefix('admin')->name('admin.')->middleware('is_admin')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('contents', AdminContentController::class);
});

Route::get('/admin-dashboard', [DashboardController::class, 'admindashboard'])->name('admin.dashboard');
