<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[\App\Http\Controllers\PagesController::class,'index'])->name('index');
Route::get('/shop',[\App\Http\Controllers\PagesController::class,'shop'])->name('shop');

Route::get('/admin/dashboard',[\App\Http\Controllers\HomeController::class,'index'])->name('admin')->middleware('isAdmin');

Route::get('/admin/crud/create',[\App\Http\Controllers\CrudController::class,'create'])->name('crud.create');
Route::post('/admin/crud/store',[\App\Http\Controllers\CrudController::class,'store'])->name('crud.store');
Route::get('/admin/crud/index',[\App\Http\Controllers\CrudController::class,'index'])->name('crud.index');
Route::get('/admin/crud/edit/{id}',[\App\Http\Controllers\CrudController::class,'edit'])->name('crud.edit');
Route::post('/admin/crud/update/{id}',[\App\Http\Controllers\CrudController::class,'update'])->name('crud.update');
Route::get('/admin/crud/delete/{id}',[\App\Http\Controllers\CrudController::class,'delete'])->name('crud.delete');


Route::get('logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'logout'])->name('logout');





//
require __DIR__.'/auth.php';
