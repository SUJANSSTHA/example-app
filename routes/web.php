<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard',[\App\Http\Controllers\HomeController::class,'index'])->name('admin');
Route::get('/admin/crud/create',[\App\Http\Controllers\CrudController::class,'create'])->name('crud.create');
Route::post('/admin/crud/store',[\App\Http\Controllers\CrudController::class,'store'])->name('crud.store');
Route::get('/admin/crud/index',[\App\Http\Controllers\CrudController::class,'index'])->name('crud.index');
Route::get('/admin/crud/edit/{id}',[\App\Http\Controllers\CrudController::class,'edit'])->name('crud.edit');
Route::post('/admin/crud/update/{id}',[\App\Http\Controllers\CrudController::class,'update'])->name('crud.update');
Route::get('/admin/crud/delete/{id}',[\App\Http\Controllers\CrudController::class,'delete'])->name('crud.delete');