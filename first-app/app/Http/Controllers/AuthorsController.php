<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class AuthorsController extends Controller
{
    public function index()
    {
        $allAuthors = [];

        foreach (Article::all() as $article) { 
            array_push($allAuthors, $article->author->name);
        }
        
        $authors = array_unique($allAuthors);

        return view('admin.articles.authors')->with('authors', $authors);
    }

    public function show() 
    {
        return view('author');
    }
}
