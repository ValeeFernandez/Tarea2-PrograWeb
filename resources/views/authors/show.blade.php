@extends('layouts.app')

@section('content')

<div class="card" style="max-width: 500px; margin: auto; text-align: left;">

    <h1>{{ $author['name'] }}</h1>

    <p><strong>Nationality:</strong> {{ $author['nationality'] }}</p>
    <p><strong>Birth Year:</strong> {{ $author['birth_year'] }}</p>
    <p><strong>Fields:</strong> {{ $author['fields'] }}</p>

    <hr>

    <h3>Books</h3>

    <ul>
        @foreach($books as $book)
            <li>
                <a href="/books/{{ $book['id'] }}">
                    {{ $book['title'] }}
                </a>
            </li>
        @endforeach
    </ul>

</div>

@endsection