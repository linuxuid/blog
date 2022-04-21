<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BooksCategoriesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginAndLogOutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
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

/**
 * HomePageController , main page , rules and etc.. 
 */
Route::get('/', [HomePageController::class, 'index'])->name('home.index');
Route::get('/rules', [HomePageController::class, 'rulesPage'])->name('rules');

/**
 * CategoriesController show index
 */
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');

/**
 * upload data from CategoriesController
 */
Route::get('/create-categories', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/upload-categories', [CategoriesController::class, 'store'])->name('categories.store');

/**
 * ArticlesController show index
 */
Route::get('/articles/{id}', [ArticlesController::class, 'index'])->name('articles.index');

Route::get('/articles/{id}/{subArticle_id}', [ArticlesController::class, 'show'])->name('articles.show');
/**
 * create and upload articles
 */
Route::get('/create-article', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('/upload-article', [ArticlesController::class,'store'])->name('articles.store');

/**
 * Auth form
 */

 // register
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// authorization
Route::get('login', [LoginAndLogOutController::class, 'create'])->name('login.create');
Route::post('login', [LoginAndLogOutController::class, 'store'])->name('login.post');

// logout
Route::post('/login-success', [LoginAndLogOutController::class, 'destroy'])->name('login.delete');

Route::get('/login-success', [LoginAndLogOutController::class, 'loginPage'])->name('login.success');

/**
 * Admin Controll panel
 */
Route::get('/admin-control', [AdminController::class, 'index'])->name('admin.index');
