@extends('layouts.app')

@section('content')

<div class="card" style="max-width: 500px; margin: auto; text-align: left;">
    
    
    <h1>Edit Author</h1>
    
    <form method="POST" action="/authors/{{ $author->id }}">
        @csrf
        @method('PUT')
        <p><label>Name<br><input type="text" name="name" value="{{ $author->name }}" style="width:100%"></label></p>
        <p><label>Nationality<br><input type="text" name="nationality" value="{{ $author->nationality }}" style="width:100%"></label></p>
        <p><label>Birth Year<br><input type="number" name="birth_year" value="{{ $author->birth_year }}" style="width:100%"></label></p>
        <p><label>Fields<br><input type="text" name="fields" value="{{ $author->fields }}" style="width:100%"></label></p>
        <button type="submit" class="btn">Update</button>
    </form>

</div>

@endsection