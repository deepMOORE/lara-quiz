<?php declare(strict_types=1);

namespace App\Dto;

use MyCLabs\Enum\Enum;

class QuestionType extends Enum
{
    public const RADIO = 'radio';
    public const CHECK = 'check';
}
