<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BooksCategoriesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Auth\LoginAndLogOutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\HowToStuffController;
use App\Http\Controllers\LinksPageController;
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

/**
 * search
 */
Route::get('/search', [HomePageController::class, 'search'])->name('search');

/**
 * contacts
 */
Route::get('contacts', [HomePageController::class, 'contactMePage'])->name('home.contact');

/**
 * how-to stuff
 */
Route::get('/protect-yourself', [HowToStuffController::class, 'networkSecurity'])->name('howtostuff.anonymity');
Route::get('/about-hacking', [HowToStuffController::class, 'hackingPage'])->name('howtostuff.hacking');

/**
 * links
 */
Route::get('links', [LinksPageController::class, 'index'])->name('links.links');

Route::get('/links-create', [LinksPageController::class, 'create'])->name('links.create');
Route::post('/links-upload', [LinksPageController::class, 'store'])->name('links.store');


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

// all articles in order
Route::get('/all-articles', [ArticlesController::class, 'allArticlesPage'])->name('articles.all');

/**
 * create and upload articles
 */
Route::get('/create-article', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('/upload-article', [ArticlesController::class,'store'])->name('articles.store');


/**
 * Auth form
 */

 // register
// Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
// Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// authorization
Route::get('login', [LoginAndLogOutController::class, 'create'])->name('login.create');
Route::post('login', [LoginAndLogOutController::class, 'store'])->name('login.post');

// logout
Route::post('/login-success', [LoginAndLogOutController::class, 'destroy'])->name('login.delete')->middleware('auth');

Route::get('/login-success', [LoginAndLogOutController::class, 'loginPage'])->name('login.success');

// change password
Route::get('change-password/{id}', [ChangePasswordController::class, 'create'])->name('password.change')->middleware('auth');
Route::post('change-password/{id}', [ChangePasswordController::class, 'store'])->name('password.change.post')->middleware('auth');
/**
 * Admin Controll panel
 */
Route::get('/admin-control', [AdminController::class, 'index'])->name('admin.index')->middleware('admin');
