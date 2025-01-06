<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Сохранение данных в базе
        Contact::create($validated);

        // Перенаправление с сообщением об успехе
        return back()->with('success', 'Сообщение успешно отправлено!');
    }
}

