@extends('base')

@section('title')
rate_bok
@endsection



@section('content')

<h1>Rate books...</h1>

<form method="post" action="{{ route('ratings.store')}}">
    @csrf
    <div class="form-group">
        <label for="user_id">Bruker-id:</label>
        <input type="text" class="form-control" name="user_id"/>
    </div>

    <div class="form-group">
        <label for="book_id">Bok-id:</label>
        <input type="text" class="form-control" name="book_id"/>
    </div>

    <div class="form-group">
        <label for="rating">Rating:</label>
        <input type="text" class="form-control" name="rating"/>
    </div>
    <button type="submit" class="btn btn-primary-outline">Legg til rating av bok</button>
</form>

@endsection
