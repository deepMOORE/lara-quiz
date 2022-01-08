<?php

namespace App\Models;

use Database\Factories\AnswerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return AnswerFactory::new();
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
