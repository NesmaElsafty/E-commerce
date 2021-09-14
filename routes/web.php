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
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('home');
});
// For Users
Route::group(['middleware'=>['auth' , 'role:user']], function () {
    Route::get('/profile', 'App\Http\Controllers\DashboardController@profile')->name('profile');
});


require __DIR__.'/auth.php';

// Route::get('/', function () {
//    return view('main.index');
// })->withoutMiddleware([EnsureTokenIsValid::class]);