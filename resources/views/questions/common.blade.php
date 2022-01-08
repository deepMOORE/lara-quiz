@extends('welcome')

@section('content')
    <div>
        <h1>Question manager</h1>
        <a href="/questions/create">Add question</a>
    </div>
    <div>
        @yield('manage-questions')
    </div>
@endsection
