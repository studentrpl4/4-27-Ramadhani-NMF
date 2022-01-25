<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ContactController;

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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "takaru ken",
        "email" => "OKarukun@gmail.com",
        "gambar" => "takaru ken.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);
    return view('contacts', [
        "title" => "Contacts"
    ]);
});