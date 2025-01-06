<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Models\Activity;

class AboutController extends Controller
{
    public function index()
    {
        $hobbies = Hobby::all();
        $activities = Activity::all();

        return view('about', compact('hobbies', 'activities'));
    }
}