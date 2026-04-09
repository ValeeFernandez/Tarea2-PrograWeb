@extends('layouts.app')

@section('content')
<div class="card" style="max-width: 500px; margin: auto; text-align: left;">
   
    <h1>New Publisher</h1>

    <form method="POST" action="/publishers">
        @csrf
        <p><label>Name<br><input type="text" name="name" style="width:100%"></label></p>
        <p><label>Country<br><input type="text" name="country" style="width:100%"></label></p>
        <p><label>Founded<br><input type="number" name="founded" style="width:100%"></label></p>
        <p><label>Genre<br><input type="text" name="genere" style="width:100%"></label></p>
        <button type="submit" class="btn">Save</button>
    </form>
    
</div>
@endsection