@extends('layouts.app')

@section('content')

<div class="card" style="max-width: 500px; margin: auto; text-align: left;">
    
    <h1>New Author</h1>

    <form method="POST" action="/authors">
        @csrf
        <p><label>Name<br><input type="text" name="name" style="width:100%"></label></p>
        <p><label>Nationality<br><input type="text" name="nationality" style="width:100%"></label></p>
        <p><label>Birth Year<br><input type="number" name="birth_year" style="width:100%"></label></p>
        <p><label>Fields<br><input type="text" name="fields" style="width:100%"></label></p>
        <button type="submit" class="btn">Save</button>
    </form>

</div>

@endsection