<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AccountUser;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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



// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });

Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'postLogin']);
Route::get('/detail/{slug}',[UserController::class, 'detail'])->name('detail');
Route::get('/register',[UserController::class, 'register'])->name('register');
Route::post('/register',[UserController::class, 'postRegister']);
Route::get('/logoutAcc',[UserController::class, 'logoutAcc'])->name('logoutAcc');

Route::prefix('/admin')->middleware('admin')->group(function(){
    Route::get('/',[DashBoardController::class, 'index'])->name('admin.index');
    // Route::get('/login',[DashBoardController::class, 'login'])->name('admin.login');
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::resource('accountuser',AccountUser::class);

});