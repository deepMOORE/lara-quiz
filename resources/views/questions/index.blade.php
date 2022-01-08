@extends('questions.common')

@section('manage-questions')
    @foreach($questions as $i => $question)
        <form>
            <div class="question-title">
                <a href="/questions/{{$question->id}}/edit">{{$i + 1}}. {{$question->content}}</a> <br>
            </div>
            @if($question->type === \App\Dto\QuestionType::CHECK)
                @foreach($question->answers as $answer)
                    <div>
                        <input type="checkbox" value="{{$answer->id}}">
                        <span>{{$answer->content}}</span>
                    </div>
                @endforeach
            @endif
            @if($question->type === \App\Dto\QuestionType::RADIO)
                @foreach($question->answers as $answer)
                    <div>
                        <input type="radio" value="{{$answer->id}}">
                        <span>{{$answer->content}}</span>
                    </div>
                @endforeach
            @endif
        </form>
        <br>
    @endforeach
@endsection
