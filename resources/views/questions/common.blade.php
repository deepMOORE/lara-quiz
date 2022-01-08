@extends('welcome')

@section('content')
    <h1>Question manager</h1>
    <div class="add-question-button">
        <a href="/questions/create">Add question</a>
    </div>
    <div>
        @yield('manage-questions')
    </div>
@endsection
