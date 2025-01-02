<?php

namespace App\Http\Controllers;

use App\Models\Hobby;

class AboutController extends Controller
{
    public function index()
    {
        $hobbies = Hobby::all();  // Получаем все хобби
        return view('about', compact('hobbies'));  // Передаем хобби в about.blade.php
    }
}