<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ArticleCategoryController extends Controller
{
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
