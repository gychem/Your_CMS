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
        $articles = Article::all()->where('category_id', '=', $category->id);
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

    public function edit(Category $category) 
    {
        return view('admin.articles.edit-category')->with('category', $category);
    } 

    public function update(Request $request, Category $category) 
    {
        $category->update([
            'name' => $request->name,
        ]);

        return redirect('/admin/news/categories')->with('success', "Category $category->name has been updated.");
    } 


    public function destroy(Category $category) 
    {
        $category->delete();
        return redirect('/admin/news/categories')->with('success', "Category $category->name has been deleted.");
    } 
}
