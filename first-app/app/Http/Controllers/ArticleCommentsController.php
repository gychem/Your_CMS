<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class ArticleCommentsController extends Controller
{
    public function store(Request $request, $article)
    {
        request()->validate([
            'body' => ['required']
        ]);

        $comment = Comment::create([
            'body' => $request->body,
            'article_id' => $article,
            'user_id' => $request->user()->id
        ]);

        return back()->with('success', "Your comment has been added.");
    } 
}
