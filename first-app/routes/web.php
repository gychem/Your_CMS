<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
Route::get('/', function () {
    return view('homepage');
});

Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('contact', [\App\Http\Controllers\ContactController::class, 'store']);

// News Articles
Route::get('news', [\App\Http\Controllers\ArticleController::class, 'index'])->name('news');
Route::get('news/{article:slug}', [\App\Http\Controllers\ArticleController::class, 'show']);
Route::post('news/{article}/comment', [\App\Http\Controllers\ArticleCommentsController::class, 'store'])->name('news/{article}/comment')->middleware('auth'); 

// User
Route::get('register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('register', [\App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest'); 
Route::get('login', [\App\Http\Controllers\SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [\App\Http\Controllers\SessionsController::class, 'store'])->middleware('guest');
Route::get('logout', [\App\Http\Controllers\SessionsController::class, 'destroy'])->name('logout')->middleware('auth'); 

// Pages
Route::get('{page:slug}', [\App\Http\Controllers\PagesController::class, 'show'])->name('{page:slug}');





//For adding an image
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');






// Admin
Route::get('admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin'); 

// Admin -> News
Route::get('admin/news/create', [\App\Http\Controllers\ArticleController::class, 'create'])->name('admin/news/create')->middleware('admin'); 
Route::post('admin/news/create', [\App\Http\Controllers\ArticleController::class, 'store'])->name('admin/news/create')->middleware('admin');  
Route::get('admin/news', [\App\Http\Controllers\AdminArticlesController::class, 'index'])->name('admin/news')->middleware('admin'); 
Route::get('admin/news/edit/{article}', [\App\Http\Controllers\ArticleController::class, 'edit'])->name('admin/news/edit/{article}')->middleware('admin');  
Route::post('admin/news/edit/{article}', [\App\Http\Controllers\ArticleController::class, 'update'])->name('admin/news/edit/{article}')->middleware('admin');  
Route::get('admin/news/delete/{article}', [\App\Http\Controllers\ArticleController::class, 'destroy'])->name('admin/news/delete/{article}')->middleware('admin'); 

// Admin -> News -> Categories
Route::get('admin/news/categories', [\App\Http\Controllers\AdminArticlesController::class, 'categories'])->name('admin/news/categories')->middleware('admin'); 
Route::post('admin/news/categories/create', [\App\Http\Controllers\ArticleCategoryController::class, 'store'])->name('admin/news/categories/create')->middleware('admin'); 
Route::get('admin/news/categories/delete/{category}', [\App\Http\Controllers\ArticleCategoryController::class, 'destroy'])->name('admin/news/categories/delete/{category}')->middleware('admin'); 

// Admin -> News -> Authors
Route::get('admin/news/authors', [\App\Http\Controllers\AuthorsController::class, 'index'])->name('admin/news/authors')->middleware('admin');
Route::get('admin/news/authors/{author}', [\App\Http\Controllers\AuthorsController::class, 'show'])->name('showAuthor')->middleware('admin');

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

// Admin -> Pages
Route::get('admin/pages', [\App\Http\Controllers\PagesController::class, 'index'])->name('admin/pages')->middleware('admin');
Route::get('admin/pages/create', [\App\Http\Controllers\PagesController::class, 'create'])->name('admin/pages/create')->middleware('admin');
Route::post('admin/pages/create', [\App\Http\Controllers\PagesController::class, 'store'])->name('admin/pages/create')->middleware('admin');
Route::get('admin/pages/delete/{page}', [\App\Http\Controllers\PagesController::class, 'destroy'])->name('admin/pages/delete/{page}')->middleware('admin'); 

// Admin -> Extensions
Route::get('admin/extensions', [\App\Http\Controllers\ExtensionsController::class, 'index'])->name('admin/extensions')->middleware('admin');

// Admin -> Dashboard
Route::get('admin/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin/dashboard')->middleware('admin');

// Admin -> Back-up
Route::get('admin/backup', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin/backup')->middleware('admin');