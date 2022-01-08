<?php

namespace Database\Seeders;

use App\Dto\QuestionType;
use App\Models\Answer;
use App\Models\CorrectAnswer;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = 1;

        $questions = $this->createQuestions($userId);

        foreach ($questions as $question) {
            if ($question->type === QuestionType::CHECK) {
                $answers = $this->createAnswersForQuestion($question->id);

                $this->createCorrectAnswersForQuestion($question->id, $answers->pluck('id'), false);

                continue;
            }

            if ($question->type === QuestionType::RADIO) {
                $answers = $this->createAnswersForQuestion($question->id);

                $this->createCorrectAnswersForQuestion($question->id, $answers->pluck('id'), true);

                continue;
            }
        }
    }

    private function createCorrectAnswersForQuestion(int $questionId, Collection $answersIds, bool $singleCorrect): Collection
    {
        if ($singleCorrect) {
            $model = CorrectAnswer::factory()->create([
                'question_id' => $questionId,
                'answer_id' => $answersIds->random()
            ]);

            return collect($model);
        }

        $correctAnswersIds = $answersIds->random($answersIds->count() - 2);

        foreach ($correctAnswersIds as $correctAnswersId) {
            CorrectAnswer::factory()->create([
                'question_id' => $questionId,
                'answer_id' => $correctAnswersId
            ]);
        }

        return CorrectAnswer::all();
    }

    private function createAnswersForQuestion(int $questionId): Collection
    {
        $count = random_int(3, 5);

        return Answer::factory(['question_id' => $questionId])->count($count)->create();
    }

    private function createQuestions(int $userId): Collection
    {
        return Question::factory()->count(8)->create([
            'user_id' => $userId
        ]);
    }
}
