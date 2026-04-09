@extends('layouts.app')

@section('content')
<div class="card" style="max-width: 500px; margin: auto; text-align: left;">
   
    <h1>{{ $book->title }}</h1>

    <p><strong>Edition:</strong> {{ $book->edition }}</p>
    <p><strong>Copyright:</strong> {{ $book->copyright }}</p>
    <p><strong>Language:</strong> {{ $book->language }}</p>
    <p><strong>Pages:</strong> {{ $book->pages }}</p>
    <hr>

    <p><strong>Author:</strong> <a href="/authors/{{ $book->author->id }}">{{ $book->author->name }}</a></p>
    <p><strong>Publisher:</strong> <a href="/publishers/{{ $book->publisher->id }}">{{ $book->publisher->name }}</a></p>
    <br>

    <a href="/books/{{ $book->id }}/edit" class="btn">Edit Book</a>

</div>

@endsection