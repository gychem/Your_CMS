<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class AdminArticlesController extends Controller
{
    public function index() 
    {
        $articles = Article::all();
        return view('admin.articles.list')->with('articles', $articles);
    } 

    public function categories() 
    {
        $categories = Category::all();
        return view('admin.articles.categories')->with('categories', $categories);
    } 
}
