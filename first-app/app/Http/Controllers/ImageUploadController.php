<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Postimage;

class ImageUploadController extends Controller
{
    public function index() {
        return view('add_image');
    }

    public function store() {

    }

    public function show() {
        return view('view_image');
    }
}