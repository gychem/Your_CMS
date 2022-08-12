<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Author;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('admin.articles.authors')->with('authors', $authors);
    }

    public function show(Author $author) 
    {
        $articles = Article::all()->where('user_id', '=', $author->user_id);
        return view('admin.articles.author')->with('articles', $articles);
    }
}
