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
                <a href="/questions/{{$question->id}}/edit">{{$question->content}}</a>
            </article>
        @endforeach
    </div>
</div>
</body>
</html>
