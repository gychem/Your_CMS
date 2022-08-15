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
        $articles = Article::where('user_id', '=', $author->user_id)->paginate(15);

        $data = ['articles' => $articles, 'author' => $author];

        return view('admin.articles.author')->with('data', $data);
    }

    public function search(Request $request, Author $author) 
    {
        $articles = Article::where('title','like','%'.$request->search.'%')->orderBy('id')->paginate(15);
        $data = ['articles' => $articles, 'author' => $author];
                    
        return view('admin.articles.author')->with('data', $data);
    } 
}
