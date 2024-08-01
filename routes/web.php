<?php

use App\Http\Controllers\Backend\MyController;
use Illuminate\Support\Facades\Route;
use App\Models\Backend\product;
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
    return view('welcome');
});

Route::get('/home',[MyController::class,'index']);
Route::post('/addProduct',[MyController::class,'store'])->name("add-route");
Route::get('/manageProduct',[MyController::class,'show'])->name("showProduct");
Route::get('/delete/{id}',[ MyController::class, 'delete'])->name("productDelete");
Route::get('/edit/{id}',[ MyController::class, 'edit'])->name("edit");
