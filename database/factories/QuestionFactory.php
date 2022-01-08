<?php

namespace Database\Factories;

use App\Dto\QuestionType;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->realText('30'),
            'type' => $this->faker->randomElement(QuestionType::toArray())
        ];
    }
}
