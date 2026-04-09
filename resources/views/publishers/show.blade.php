@extends('layouts.app')

@section('content')

<div class="card" style="max-width: 500px; margin: auto; text-align: left;">

    <h1>{{ $publisher['name'] }}</h1>

    <p><strong>Country:</strong> {{ $publisher['country'] }}</p>
    <p><strong>Founded:</strong> {{ $publisher['founded'] }}</p>
    <p><strong>Genre:</strong> {{ $publisher['genere'] }}</p>

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