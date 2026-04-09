@extends('layouts.app')

@section('content')

<div class="card" style="max-width: 500px; margin: auto; text-align: left;">

    <h1>{{ $book['title'] }}</h1>

    <p><strong>Edition:</strong> {{ $book['edition'] }}</p>
    <p><strong>Pages:</strong> {{ $book['pages'] }}</p>
    <p><strong>Language:</strong> {{ $book['language'] }}</p>

    <hr>

    <p>
        <strong>Author:</strong>
        <a href="/authors/{{ $book['author_id'] }}">
            {{ $book['author'] }}
        </a>
    </p>

    <p>
        <strong>Publisher:</strong>
        <a href="/publishers/{{ $book['publisher_id'] }}">
            {{ $book['publisher'] }}
        </a>
    </p>

</div>

@endsection