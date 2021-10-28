<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\testproduct;

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

Route::get('/',[MainPageController::class, 'index']);
Route::get('/products/{productID}',[ProductController::class, 'getproduct']);


Route::get('/checkDB', function ()
{
   dd(testproduct::get());
});

