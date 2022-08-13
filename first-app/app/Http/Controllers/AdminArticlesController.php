<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;

class AdminArticlesController extends Controller
{
    public function index() 
    {
        $articles = Article::paginate(15);;
        $comments = Comment::all();

        $data = ['articles' => $articles, 'comments' => $comments];

        return view('admin.articles.list')->with('data', $data);
    } 


}
