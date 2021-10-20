<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;


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
// ->withoutMiddleware([EnsureTokenIsValid::class]);

Route::group(['middleware'=>['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('home');
});
// For Users
Route::group(['middleware'=>['auth' , 'role:user']], function () {
    Route::get('/profile', 'DashboardController@profile')->name('profile');
});
Route::group(['middleware'=>['auth' , 'role:user']], function () {
    Route::get('/cart', 'OrderController@GetCartData')->name('cart');
});

Route::group(['middleware'=>['auth' , 'role:admin']], function () {
    Route::resource('dashboard/categories', CategoryController::class);
});

Route::group(['middleware'=>['auth' , 'role:admin']], function () {
    Route::resource('dashboard/products', ProductController::class);
});

Route::group(['middleware'=>['auth' , 'role:admin']], function () {
    Route::resource('dashboard/branches', BranchController::class);
});

Route::group(['middleware'=>['auth' , 'role:admin']], function () {
    Route::resource('dashboard/users', UserController::class);
});

Route::get('main/categories', 'CategoryController@MainCategories')->name('MainCategories');


Route::get('main/showCategory/{category}', 'CategoryController@CategoryShow')->name('CategoryShow');

Route::get('main/products', 'ProductController@MainProducts')->name('MainProducts');

Route::get('main/showProduct/{product}', 'ProductController@ProductShow')->name('ProductShow');

Route::get('main/branches', 'BranchController@MainBranches')->name('MainBranches');

Route::get('main/showBranch/{id}', 'BranchController@BranchShow')->name('BranchShow');

Route::post('main/showProduct', 'OrderController@addToCart')->name('addToCart');

// Route::get('/cart', 'OrderController@confirm')->name('confirm');



require __DIR__.'/auth.php';