<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
            $videos = Video::all(); // Получаем все видео из базы данных
            return view('video', compact('videos')); // Передаем данные в шаблон
    }
}
