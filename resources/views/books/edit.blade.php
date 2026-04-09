@extends('layouts.app')

@section('content')

<div class="card" style="max-width: 500px; margin: auto; text-align: left;">
    
    <h1>Edit Book</h1>

    <form method="POST" action="/books/{{ $book->id }}">
        @csrf
        @method('PUT')
        <p><label>Title<br><input type="text" name="title" value="{{ $book->title }}" style="width:100%"></label></p>
        <p><label>Edition<br><input type="text" name="edition" value="{{ $book->edition }}" style="width:100%"></label></p>
        <p><label>Copyright<br><input type="number" name="copyright" value="{{ $book->copyright }}" style="width:100%"></label></p>
        <p><label>Language<br><input type="text" name="language" value="{{ $book->language }}" style="width:100%"></label></p>
        <p><label>Pages<br><input type="number" name="pages" value="{{ $book->pages }}" style="width:100%"></label></p>
        
        <p>
            <label>Author<br>
                <select name="author_id" style="width:100%">
                    @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                    @endforeach
                </select>
            </label>
        </p>

        <p>
            <label>Publisher<br>
                <select name="publisher_id" style="width:100%">
                    @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}" {{ $book->publisher_id == $publisher->id ? 'selected' : '' }}>
                        {{ $publisher->name }}
                    </option>
                    @endforeach
                </select>
            </label>
        </p>

        <button type="submit" class="btn">Update</button>
    
    
    </form>

</div>

@endsection