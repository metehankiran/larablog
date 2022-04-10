<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TextSearchController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

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
Route::post('/suggestedPost', [HomeController::class, 'suggestedPost'])->name('suggestedPost');
Route::get('/search/{query?}', [HomeController::class, 'search'])->name('search');
Route::post('/searchResult', [HomeController::class, 'searchResult'])->name('search.post');
Route::resource('comments', CommentController::class);

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::view('/', 'backend.home')->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::post('post/featured/{id}', [PostController::class, 'featured'])->name('posts.featured');
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
Route::get('seed', function() {
    Artisan::call('db:seed');
    return redirect()->route('home');
});