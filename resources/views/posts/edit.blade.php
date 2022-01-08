<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posts</title>
</head>
<body>
<div>
    <form method="POST" action="/posts/{{$post->id}}">
        @method('PUT')
        @csrf
        <div>
            <label for="title">Title: </label>
            <input id="title" name="title" value="{{$post->title}}"/>
        </div>
        <div>
            <label for="content">Content: </label>
            <input id="content" name="content" value="{{$post->content}}"/>
        </div>
        <button>Update</button>
    </form>

    <form method="POST" action="/posts/{{$post->id}}">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form>
</div>
</body>
</html>
