<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

use App\Models\Visitor;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{category:slug}', [HomeController::class, 'category'])->name('category');
Route::get('/post/{post:slug}', [HomeController::class, 'post'])->name('post')->middleware('visitor');
Route::get('/author/{user:slug}', [HomeController::class, 'author'])->name('author');

Route::resource('comments', CommentController::class);

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::view('/', 'backend.home')->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);    
});

Auth::routes();

Route::get('reset', function() {
    Artisan::call('migrate:fresh --seed');
    Artisan::call('view:cache');
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    return redirect()->route('home');
});