@extends('layouts.app')

@section('content')

<div class="card" style="max-width: 500px; margin: auto; text-align: left;">
    
    <h1>New Book</h1>

    <form method="POST" action="/books">
        @csrf
        <p><label>Title<br><input type="text" name="title" style="width:100%"></label></p>
        <p><label>Edition<br><input type="text" name="edition" style="width:100%"></label></p>
        <p><label>Copyright<br><input type="number" name="copyright" style="width:100%"></label></p>
        <p><label>Language<br><input type="text" name="language" style="width:100%"></label></p>
        <p><label>Pages<br><input type="number" name="pages" style="width:100%"></label></p>
        
        <p>
            <label>Author<br>
                <select name="author_id" style="width:100%">
                    @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </label>
        </p>

        <p>
            <label>Publisher<br>
                <select name="publisher_id" style="width:100%">
                    @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                    @endforeach
                </select>
            </label>
        </p>
        <button type="submit" class="btn">Save</button>
    
    </form>

</div>

@endsection