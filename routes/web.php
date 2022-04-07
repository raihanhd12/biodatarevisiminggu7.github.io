<?php

use Illuminate\Support\Facades\Route;
use App\Models\Raihan;
use App\Http\Controllers\RaihanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SelengkapnyaController;
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

Route::get('/', [RaihanController::class,'index']);
// Route::get('/', [RaihanController::class,'home']);
Route::get('/', [HomeController::class,'index']);
// Route::get('/about',[RaihanController::class,'about']);
Route::get('/about',[AboutController::class,'index']);
// Route::get('/comment',[RaihanController::class,'comment']);
Route::get('/comment',[CommentController::class,'index']);
// Route::get('/selengkapnya', [RaihanController::class,'selengkapnya']);
Route::get('/selengkapnya', [SelengkapnyaController::class,'index']);


