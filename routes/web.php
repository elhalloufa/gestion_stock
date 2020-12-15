<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});
Route::get("/dashboard", [DashboardController::class, 'index'])->name('dashboard.index');
Route::get("/produts", [ProductController::class,'index'])->name('produt.index');
Route::get('/produts/create',[ProductController::class, 'create'])->name('produt.create');
Route::post('/produts/store',[ProductController::class,'store'])->name('produt.store');
Route::get('/produts/{id}',[ProductController::class,'edit'])->name('produt.edit');
Route::put('/produts/{id}/edit',[ProductController::class,'update'])->name('produt.update');
Route::delete('/produts/{Product}',[ProductController::class,'destroy'])->name('produt.destroy');


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
