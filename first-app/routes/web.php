<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('home', function () {
    return view('homepage');
});

Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('contact', [\App\Http\Controllers\ContactController::class, 'store']);

// News Articles
Route::get('news', [\App\Http\Controllers\ArticleController::class, 'index'])->name('news');
Route::get('news/categories/{category:slug}', [\App\Http\Controllers\ArticleController::class, 'index_category']);
Route::get('news/authors/{author:slug}', [\App\Http\Controllers\ArticleController::class, 'index_author']);
Route::get('news/{article:slug}', [\App\Http\Controllers\ArticleController::class, 'show']);
Route::post('news/{article}/comment', [\App\Http\Controllers\ArticleCommentsController::class, 'store'])->middleware('auth'); 

// User
Route::get('register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('register', [\App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest'); 
Route::get('login', [\App\Http\Controllers\SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [\App\Http\Controllers\SessionsController::class, 'store'])->middleware('guest');
Route::get('logout', [\App\Http\Controllers\SessionsController::class, 'destroy'])->name('logout')->middleware('auth'); 


//User -> Forget Password
Route::get('lost-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('lost.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// Admin
Route::get('admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin'); 

//User -> Profile
Route::get('{user}', [\App\Http\Controllers\ProfilesController::class, 'index']);

// Pages
Route::get('{page:slug}', [\App\Http\Controllers\PagesController::class, 'show'])->name('{page:slug}');

// Admin -> News
Route::get('admin/news/create', [\App\Http\Controllers\ArticleController::class, 'create'])->name('admin/news/create')->middleware('admin'); 
Route::post('admin/news/create', [\App\Http\Controllers\ArticleController::class, 'store'])->name('admin/news/create')->middleware('admin');  
Route::get('admin/news', [\App\Http\Controllers\AdminArticlesController::class, 'index'])->name('admin/news')->middleware('admin'); 
Route::get('admin/news/edit/{article:slug}', [\App\Http\Controllers\ArticleController::class, 'edit'])->middleware('admin');  
Route::post('admin/news/edit/{article:slug}', [\App\Http\Controllers\ArticleController::class, 'update'])->middleware('admin');  
Route::get('admin/news/delete/{article:slug}', [\App\Http\Controllers\ArticleController::class, 'destroy'])->middleware('admin'); 
Route::post('admin/news/search', [\App\Http\Controllers\ArticleController::class, 'search'])->name('admin/news/search')->middleware('admin');

// Admin -> News -> Categories
Route::get('admin/news/categories', [\App\Http\Controllers\ArticleCategoryController::class, 'index'])->name('admin/news/categories')->middleware('admin'); 
Route::get('admin/news/categories/{category:slug}', [\App\Http\Controllers\ArticleCategoryController::class, 'show'])->middleware('admin'); 
Route::get('admin/news/categories/edit/{category:slug}', [\App\Http\Controllers\ArticleCategoryController::class, 'edit'])->middleware('admin'); 
Route::post('admin/news/categories/edit/{category:slug}', [\App\Http\Controllers\ArticleCategoryController::class, 'update'])->middleware('admin'); 
Route::post('admin/news/categories/create', [\App\Http\Controllers\ArticleCategoryController::class, 'store'])->name('admin/news/categories/create')->middleware('admin'); 
Route::get('admin/news/categories/delete/{category:slug}', [\App\Http\Controllers\ArticleCategoryController::class, 'destroy'])->name('admin/news/categories/delete/{category}')->middleware('admin'); 

// Admin -> News -> Authors
Route::get('admin/news/authors', [\App\Http\Controllers\AuthorsController::class, 'index'])->name('admin/news/authors')->middleware('admin');
Route::get('admin/news/authors/{author:slug}', [\App\Http\Controllers\AuthorsController::class, 'show'])->middleware('admin');

// Admin -> Inbox
Route::get('admin/inbox', [\App\Http\Controllers\ContactController::class, 'index_admin'])->name('admin/inbox')->middleware('admin');
Route::get('admin/inbox/{message}', [\App\Http\Controllers\ContactController::class, 'show'])->name('admin/inbox/{article}')->middleware('admin');  
Route::get('admin/inbox/delete/{message}', [\App\Http\Controllers\ContactController::class, 'destroy'])->name('admin/inbox/delete/{message}')->middleware('admin'); 

// Admin -> Users
Route::get('admin/users', [\App\Http\Controllers\UserController::class, 'index'])->name('admin/users')->middleware('admin');
Route::get('admin/users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('admin/users/create')->middleware('admin');  
Route::post('admin/users/create', [\App\Http\Controllers\UserController::class, 'store'])->name('admin/users/create')->middleware('admin');  
Route::get('admin/users/edit/{user}', [\App\Http\Controllers\UserController::class, 'edit'])->name('admin/users/edit/{user}')->middleware('admin');  
Route::post('admin/users/edit/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('admin/users/edit/{user}')->middleware('admin');
Route::post('admin/users/search', [\App\Http\Controllers\UserController::class, 'search'])->name('admin/users/search')->middleware('admin');
Route::get('admin/users/delete/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->middleware('admin');

// Admin -> Pages
Route::get('admin/pages', [\App\Http\Controllers\PagesController::class, 'index'])->name('admin/pages')->middleware('admin');
Route::get('admin/pages/create', [\App\Http\Controllers\PagesController::class, 'create'])->name('admin/pages/create')->middleware('admin');
Route::post('admin/pages/create', [\App\Http\Controllers\PagesController::class, 'store'])->name('admin/pages/create')->middleware('admin');
Route::get('admin/pages/edit/{page:slug}', [\App\Http\Controllers\PagesController::class, 'edit'])->middleware('admin');  
Route::post('admin/pages/edit/{page:slug}', [\App\Http\Controllers\PagesController::class, 'update'])->middleware('admin');
Route::get('admin/pages/delete/{page:slug}', [\App\Http\Controllers\PagesController::class, 'destroy'])->middleware('admin'); 

// Admin -> Extensions
Route::get('admin/extensions', [\App\Http\Controllers\ExtensionsController::class, 'index'])->name('admin/extensions')->middleware('admin');

// Admin -> Dashboard
Route::get('admin/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin/dashboard')->middleware('admin');

// Admin -> Back-up
Route::get('admin/backup', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin/backup')->middleware('admin');

