<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Если поле `published_at` должно быть преобразовано в Carbon:
    protected $casts = [
        'published_at' => 'datetime',
    ];
}

