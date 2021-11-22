<?php

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

Route::get('/', [\App\Http\Controllers\AgencyController::class, 'index'])->name('agency.index');
Route::get('/add', [\App\Http\Controllers\AgencyController::class, 'create'])->name('agency.create');
Route::post('/add', [\App\Http\Controllers\AgencyController::class, 'store'])->name('agency.store');
Route::get('/showroom', [\App\Http\Controllers\AgencyController::class, 'showroom'])->name('agency.showroom');
Route::get('{id}/update', [\App\Http\Controllers\AgencyController::class, 'edit'])->name('agency.edit');
Route::post('{id}/update', [\App\Http\Controllers\AgencyController::class, 'update'])->name('agency.update');
Route::get('{id}/delete', [\App\Http\Controllers\AgencyController::class, 'delete'])->name('agency.delete');
Route::get('/search', [\App\Http\Controllers\AgencyController::class, 'search'])->name('agency.search');
