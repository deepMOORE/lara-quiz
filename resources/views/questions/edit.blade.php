@extends('questions.common')

@section('manage-questions')
    <form method="POST" action="/questions/{{$question->id}}">
        @method('PUT')
        @csrf
        <div>
            <label for="content">Content: </label>
            <input id="content" name="content" value="{{$question->content}}"/>
        </div>
        <div>
            <label for="type">Type: </label>
            <input id="type" name="type" value="{{$question->type}}"/>
        </div>
        <button>Edit</button>
    </form>

    <form method="POST" action="/questions/{{$question->id}}">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form>
@endsection

