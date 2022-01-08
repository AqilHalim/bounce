<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/solusi_bisnis', function () {
    return view('solusi');
});

Route::get('/fitur', function () {
    return view('fitur');
});

Route::get('/harga', function () {
    return view('harga');
});

Route::get('/hubungi_kami', function () {
    return view('hubungi');
});

Route::get('/mvc', function () {
    return view('landing');
});

// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
