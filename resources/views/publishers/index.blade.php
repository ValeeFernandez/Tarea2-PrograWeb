@extends('layouts.app')

@section('content')

<h1>Publishers</h1>

<div class="grid">
    @foreach($publishers as $publisher)
        <div class="card">
            <h3>{{ $publisher['name'] }}</h3>

            <a href="/publishers/{{ $publisher['id'] }}">
                View details →
            </a>
        </div>
    @endforeach
</div>

@endsection