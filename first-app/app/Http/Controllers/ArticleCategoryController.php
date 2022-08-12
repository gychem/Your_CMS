<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class ArticleCategoryController extends Controller
{

    public function index() 
    {
        $categories = Category::all();
        return view('admin.articles.categories')->with('categories', $categories);
    } 

    public function show(Category $category) 
    {
        $articles = [];

        foreach (Article::all() as $article) { 
            if($article->category->name == $category->name) {
                array_push($articles, $article);
            }
            
        }

        return view('admin.articles.category')->with('articles', $articles);
    }

    public function store(Request $request)
    {
        $newCategory = Category::create([
            'name' => $request->name,
            'slug' => $request->name,
        ]);

        return redirect('admin/news/categories')->with('success', "You have created a new category!");;
    } 

    public function destroy(Category $category) 
    {
        $category->delete();
        return redirect('/admin/news/categories')->with('success', "Category $category->name has been deleted.");
    } 
}
