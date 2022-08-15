<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Str;

use App\Models\Article;
use App\Models\Category;
use App\Models\Author;
use App\Models\User;
use App\Models\Postimage;


class ArticleController extends Controller
{


    public function index() 
    {
        $articles = Article::paginate(9);
        return view('articles.overview')->with('articles', $articles);
    } 

    public function index_author(Author $author) 
    {       
        $articles = Article::all()->where('user_id', '=', $author->user_id);
        return view('articles.overview')->with('articles', $articles);
    } 

    public function index_category(Category $category) 
    {       
        $articles = Article::all()->where('category_id', '=', $category->id);
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

        $article->update([
            'category_id' => $request->category,
            'slug' =>  str()->slug($request->title),
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image' => $image
        ]);

        return redirect('news/' . $article->slug)->with('success', "Article ID $article->id has been updated.");
    } 

    public function destroy(Article $article) 
    {
        $article->delete();
        return redirect('/admin/news')->with('success', "Article ID $article->id has been deleted.");
    } 

    public function searchAdmin(Request $request) 
    {
        $data['articles'] = Article::where('title','like','%'.$request->search.'%')->orderBy('id')->paginate(15);
        return view('admin.articles.list')->with('data', $data);
    } 

    public function search(Request $request) 
    {
        $articles = Article::where('title','like','%'.$request->search.'%')->orderBy('id')->paginate(9);
        return view('articles.overview')->with('articles', $articles);
    } 

}
