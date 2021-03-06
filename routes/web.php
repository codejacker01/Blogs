<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, 'index'])->name('blogs.index');

Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');

Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');

Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');

Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blog.update');

Route::delete('/blogs/{id}', [BlogController::class, 'delete'])->name('blog.delete');






