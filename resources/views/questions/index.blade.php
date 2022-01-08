@extends('questions.common')

@section('manage-questions')
    @foreach($questions as $question)
        <article>
            <span>This is a {{$question->type}} question</span>
            <a href="/questions/{{$question->id}}/edit">{{$question->content}}</a> <br>
            @foreach($question->answers as $answer)
                <span>Answer: {{$answer->content}}</span> <br>
            @endforeach
        </article>
        <br>
    @endforeach
@endsection
