@extends('base')


@section('content')

<h1>Create books...</h1>

<form method="post" action="{{ route('make.books')}}">
    @csrf
    <div class="form-group">
        <label for="title">Tittel:</label>
        <input type="text" class="form-control" name="title"/>
    </div>

    <div class="form-group">
        <label for="author">Forfatter:</label>
        <input type="text" class="form-control" name="author"/>
    </div>

    <div class="form-group">
        <label for="description">Beskrivelse:</label>
        <input type="text" class="form-control" name="description"/>
    </div>
    <button type="submit" class="btn btn-primary-outline">Legg til bok</button>
</form>

@endsection
