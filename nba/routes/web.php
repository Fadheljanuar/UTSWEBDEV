<?php
use App\Http\Controllers\nbaplayercontroller;
use App\Http\Controllers\nbateamcontroller;
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
    return view('Home');
});

Route::resource('nbateam',nbateamcontroller::class);

Route::resource('nbaplayer',nbaplayercontroller::class);
