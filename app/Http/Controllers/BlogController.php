<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); // Получение всех записей из базы данных
        return view('blog', compact('blogs'));
    }
    
}
