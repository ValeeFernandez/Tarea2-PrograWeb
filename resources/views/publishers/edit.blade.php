@extends('layouts.app')

@section('content')

<div class="card" style="max-width: 500px; margin: auto; text-align: left;">
   
    <h1>Edit Publisher</h1>

    <form method="POST" action="/publishers/{{ $publisher->id }}">
        @csrf
        @method('PUT')
        <p><label>Name<br><input type="text" name="name" value="{{ $publisher->name }}" style="width:100%"></label></p>
        <p><label>Country<br><input type="text" name="country" value="{{ $publisher->country }}" style="width:100%"></label></p>
        <p><label>Founded<br><input type="number" name="founded" value="{{ $publisher->founded }}" style="width:100%"></label></p>
        <p><label>Genre<br><input type="text" name="genere" value="{{ $publisher->genere }}" style="width:100%"></label></p>
        <button type="submit" class="btn">Update</button>
    </form>

</div>

@endsection