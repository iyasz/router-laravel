<?php

use App\Http\Controllers\Controller;
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

//basic router
Route::get('/', function () {
    return view('welcome');
});

//view router
Route::view('/anime', 'anime');

//controllers router
Route::get('/an', [UserController::class, 'index']);
