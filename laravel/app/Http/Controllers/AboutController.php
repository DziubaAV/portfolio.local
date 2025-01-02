<?php

namespace App\Http\Controllers;

use App\Models\Hobby;

class AboutController extends Controller
{
    public function index()
    {
        $hobbies = Hobby::all();
        return view('about', compact('hobbies'));
    }

    public function about()
{
    $testimonials = Testimonial::all(); // Загружаем данные из базы
    return view('about', compact('testimonials')); // Передаем переменную в представление
}

}