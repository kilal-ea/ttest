<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlleradd;
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
Route::get('/',[Controlleradd::class,'viewconection']);
Route::get('/users',[Controlleradd::class,'users']);
Route::post('/conection',[Controlleradd::class,'conection'])->name("con");
Route::get('/dashboard',[Controlleradd::class,'dashboard']);
Route::get('/Clinet',[Controlleradd::class,'Clinet']);
Route::post('/addClinet',[Controlleradd::class,'addClinet'])->name("addc");
Route::get('/affpro',[Controlleradd::class,'affpro']);
Route::get('/getCheckedProducts',[Controlleradd::class,'getCheckedProducts']);