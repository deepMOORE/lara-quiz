<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posts</title>
</head>
<body>
<div>
    <div>
        <h1>My blog</h1>
        <a href="/posts/create">Add post</a>
    </div>
    @foreach($posts as $post)
        <article>
            <a href="/posts/{{$post->id}}/edit">{{$post->title}}</a>
            <p>{{$post->content}}</p>
        </article>
    @endforeach
</div>
</body>
</html>
