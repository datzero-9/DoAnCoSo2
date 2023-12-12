<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AccountUser;
use App\Http\Controllers\Admin\StatisticalController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'postRegister']);
Route::get('/logoutAcc', [UserController::class, 'logoutAcc'])->name('logoutAcc');

Route::middleware('user')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/detail/{slug}', [HomeController::class, 'detail'])->name('detail');
    Route::get('/contact', [UserController::class, 'contact'])->name('contact.index');

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/deletecart{id}', [CartController::class, 'deleteCart'])->name('deletecart.index');
    Route::post('/addCart', [CartController::class, 'addCart'])->name('cart.add');
    Route::get('/clearcart', [CartController::class, 'clearCart'])->name('clear.cart');

    Route::get('/checkout', [CheckoutController::class, 'form'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'submit_Form']);

  
});

Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
    Route::get('/statistical', [StatisticalController::class, 'index'])->name('statistical.index');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('accountuser', AccountUser::class);
    
});
