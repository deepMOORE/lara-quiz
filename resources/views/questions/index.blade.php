<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Questions</title>
</head>
<body>
<div>
    <div>
        <h1>My questions listing</h1>
        <a href="/questions/create">Add question</a>
    </div>
    <div>
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
    </div>
</div>
</body>
</html>
