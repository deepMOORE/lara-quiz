<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posts</title>
</head>
<body>
<div>
    <form method="POST" action="/posts">
        @csrf
        <div>
            <label for="title">Title: </label>
            <input id="title" name="title"/>
        </div>
        <div>
            <label for="content">Content: </label>
            <input id="content" name="content"/>
        </div>
        <button>Create</button>
    </form>
</div>
</body>
</html>
