<?php

namespace App\Models;

use Database\Factories\CorrectAnswerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return CorrectAnswerFactory::new();
    }
}
