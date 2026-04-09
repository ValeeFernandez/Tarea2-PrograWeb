@extends('layouts.app')

@section('content')

<h1>Authors</h1>

<a href="/authors/create" class="btn">+ Add Author</a>

<div class="grid">
    @foreach($authors as $author)
    <div class="card">
        <h3>{{ $author->name }}</h3>
        <a href="/authors/{{ $author->id }}">View details →</a>
    </div>
    @endforeach
</div>

@endsection