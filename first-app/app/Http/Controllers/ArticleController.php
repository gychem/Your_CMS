<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\Category;


class ArticleController extends Controller
{


    public function index() 
    {
        $articles = Article::all();
        return view('articles.overview')->with('articles', $articles);
    } 

    public function create() 
    {
        $categories = Category::all();
        return view('admin.articles.create')->with('categories', $categories);
    } 

    public function store(Request $request)
    {
        $newArticle = Article::create([
            'category_id' => $request->category,
            'slug' =>  str()->slug($request->title),
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'user_id' => $request->user()->id
        ]);

        return redirect('/admin/news')->with('success', "Article has been created.");;
    } 

    public function show(Article $article) 
    {
        return view('articles.show')->with('article', $article);
    } 

    public function edit(Article $article) 
    {
        return view('admin.articles.edit')->with('article', $article)->with('success', "Article ID $article->id has been updated.");;
    } 

    public function update(Request $request, Article $article) 
    {
        $article->update([
            'title' => $request->title,
            'slug' =>  str()->slug($request->title),
            'excerpt' => $request->excerpt,
            'body' => $request->body
        ]);

        return redirect('news/' . $article->id);
    } 

    public function destroy(Article $article) 
    {
        $article->delete();
        return redirect('/admin/news')->with('success', "Article ID $article->id has been deleted.");
    } 



}
