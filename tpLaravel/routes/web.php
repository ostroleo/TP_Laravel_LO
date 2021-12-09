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

Route::get('/', function () {
    return view('welcome', ['titre' => 'TITRE']);
});
Route::get('/ping', function () {
    return view('ping');
});
Route::get('/ping', ['App\Http\Controllers\PingPongControleur', 'ping']);

Route::get('/pong', ['App\Http\Controllers\PingPongControleur', 'pong']);

