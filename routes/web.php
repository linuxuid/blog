<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomePageController;
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
Route::get('/', [HomePageController::class, 'index']);
Route::get('/rules', [HomePageController::class, 'rulesPage'])->name('rules');

/**
 * ArticlesController , articles and categories
 */
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');