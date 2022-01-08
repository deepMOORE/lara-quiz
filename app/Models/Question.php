<?php

namespace App\Models;

use Database\Factories\QuestionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return QuestionFactory::new();
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function correctAnswers(): HasMany
    {
        return $this->hasMany(CorrectAnswer::class);
    }
}
