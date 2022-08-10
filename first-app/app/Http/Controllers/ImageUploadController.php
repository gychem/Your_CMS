<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function index(){
        return view('add_image');
    }

    public function store(){
       /*Logic to store data*/
    }

    public function show(){
        return view('view_image');
    }
}