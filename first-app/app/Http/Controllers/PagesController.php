<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function index() 
    {
        $pages = Page::all();
        return view('admin.pages.list')->with('pages', $pages);
    }

    public function create() 
    {
        return view('admin.pages.create');
    } 

    public function store(Request $request)
    {
        $newPage = Page::create([
            'name' => $request->name,
            'body' => $request->body,
            'slug' =>  str()->slug($request->name),
            'created_by' => $request->user()->id,
            'last_updated_by' => $request->user()->id
        ]);

        return redirect('admin/pages')->with('success', "Page $request->name has been created.");;
    } 

    public function show(Page $page) 
    {
        return view('pages.show')->with('page', $page);
    } 

    public function edit(Page $page) 
    {
        return view('admin.pages.edit')->with('page', $page);
    } 

    public function update(Request $request, Page $page) 
    {

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

    public function destroy(Page $page) 
    {
        $page->delete();
        return redirect('/admin/pages')->with('success', "Page $page->name has been deleted.");
    } 
}
