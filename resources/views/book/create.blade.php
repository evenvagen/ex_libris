@extends('base')

@section('title')
 lag_bok
@endsection

@section('content')

<h1>Add books</h1>

<form method="post" action="{{ route('books.store')}}">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" placeholder="Tittel"/>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="author" placeholder="Forfatter"/>
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="description" placeholder="Beskrivelse"/>
    </div>
    <button type="submit" class="btn btn-primary">Legg til bok</button>
</form>

@endsection
