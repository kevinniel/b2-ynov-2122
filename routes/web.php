<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriesController;

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
})->name('home');


Route::get(
    '/categories',
    [CategoriesController::class, 'index']
)->name('categories.index');

Route::get(
    '/categories/create',
    [CategoriesController::class, 'create']
)->name('categories.create');

Route::post(
    '/categories',
    [CategoriesController::class, 'store']
)->name('categories.store');

Route::get(
    '/categories/{id}/edit',
    [CategoriesController::class, 'edit']
)->name('categories.edit');

Route::put(
    '/categories/{id}/update',
    [CategoriesController::class, 'update']
)->name('categories.update');

Route::delete(
    '/categories',
    [CategoriesController::class, 'delete']
)->name('categories.delete');