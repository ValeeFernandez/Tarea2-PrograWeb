@extends('layouts.app')

@section('content')

<h1>Books</h1>

<div class="grid">
    @foreach($books as $book)
        <div class="card">
            <h3>{{ $book['title'] }}</h3>

            <a href="/books/{{ $book['id'] }}">
                View details →
            </a>
        </div>
    @endforeach
</div>

@endsection