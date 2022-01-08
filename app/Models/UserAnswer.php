<?php

namespace App\Models;

use Database\Factories\UserAnswersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return UserAnswersFactory::new();
    }
}
