@extends('questions.common')

@section('manage-questions')
    <form method="POST" action="/questions">
        @csrf
        <div>
            <label for="content">Content: </label>
            <input id="content" name="content"/>
        </div>
        <div>
            <label for="type">Type: </label>
            <input id="type" name="type"/>
        </div>
        <button>Create</button>
    </form>
@endsection
