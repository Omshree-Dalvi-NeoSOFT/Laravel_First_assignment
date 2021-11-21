<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Register;
use App\Http\Controllers\Login;

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

Route::get('/',[Main::class,'login']);
Route::get('/login',[Main::class,'login']);
Route::post('/loginpg',[Login::class,'loginCeck']);
Route::get('/register',[Main::class,'register']);
Route::post('/registerdtl',[Register::class,'registerdtl']);
Route::get('/register',[Register::class,'captcha']);
Route::get('/master/changepass', [Main::class,'changepass']);
Route::get('/master/edit', [Main::class,'editprofile']);
Route::get('/master/home', [Main::class,'home']);
Route::get('/master/gallary', [Main::class,'gallary']);
Route::get('/master/product', [Main::class,'product']);
Route::get('/master/category', [Main::class,'category']);
Route::get('/master/profile', [Main::class,'profile']);
Route::get('/master/order', [Main::class,'order']);
Route::get('/master/about', [Main::class,'about']);
Route::get('/master/fdbck', [Main::class,'fdbck']);
