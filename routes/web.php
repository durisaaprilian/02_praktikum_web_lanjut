<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    echo "Selamat Datang";
});
Route::get('/about', function () {
    echo "NIM : 2241727022<br>Nama : Mohammad Durisa Enama Aprilian<br>Kelas : 4J";
});
Route::get('/articles/{id}', function ($id) {
    echo "Laman artikel ke ".$id;
});