<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Str;

use App\Models\Article;
use App\Models\Category;
use App\Models\Postimage;


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
        $image = '';
        
        if (!empty($request->image)) {
            $file =$request->file('image');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.' . $extension;
            $file->move(public_path('images/news'), $filename);
            $data['image']= '/images/news/'.$filename;
            $image = $data['image'];

            $articleImage = Postimage::create([
                'image' =>  $data['image']
            ]); 
        }

        $newArticle = Article::create([
            'category_id' => $request->category,
            'slug' =>  str()->slug($request->title),
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'user_id' => $request->user()->id,
            'image' => $image
        ]);


        return redirect('/admin/news')->with('success', "Article has been created.");
    } 

    public function show(Article $article) 
    {
        return view('articles.show')->with('article', $article);
    } 

    public function edit(Article $article) 
    {
        $categories = Category::all();

        $data = ['article' => $article, 'categories' => $categories];

        return view('admin.articles.edit')->with('data', $data);
    } 

    public function update(Request $request, Article $article) 
    {
        $article->update([
            'title' => $request->title,
            'slug' =>  str()->slug($request->title),
            'excerpt' => $request->excerpt,
            'body' => $request->body
        ]);

        return redirect('news/' . $article->id)->with('success', "Article ID $article->id has been updated.");
    } 

    public function destroy(Article $article) 
    {
        $article->delete();
        return redirect('/admin/news')->with('success', "Article ID $article->id has been deleted.");
    } 



}
