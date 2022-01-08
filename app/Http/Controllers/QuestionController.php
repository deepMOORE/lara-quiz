<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return view('questions.index', ['questions' => $questions]);
    }

    public function edit(Question $question)
    {
        return view('questions.edit', ['question' => $question]);
    }

    public function update(int $questionId)
    {
        Question::query()->whereKey($questionId)->update([
            'content' => request('content'),
            'type' => request('type'),
        ]);

        return redirect('/questions');
    }

    public function store(Request $request)
    {
        $question = new Question();
        $question->content = $request->get('content');
        $question->user_id = $this->getUserId();
        $question->type = $request->get('type');

        $question->save();

        return redirect('/questions');
    }

    public function destroy(int $questionId)
    {
        Question::query()->whereKey($questionId)->delete();

        return redirect('/questions');
    }

    public function create()
    {
        return view('questions.create');
    }
}
