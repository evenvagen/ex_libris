@extends('base')

@section('title')
rate_bok
@endsection



@section('content')

<div class="container">

<h1>Rate books...</h1>

<form method="post" action="{{ route('ratings.store')}}">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="user_id" placeholder="Bruker id"/>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="book_id" placeholder="Bok id"/>
    </div>



{{--
    <div class="form-group">
        <label for="rating">Rating:</label>
        <input type="text" class="form-control" name="rating"/>
    </div> --}}

    <select class="form-control" name="rating" placeholder="Vurdering">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>




    <button type="submit" class="btn btn-primary">Legg til rating av bok</button>

</div>
</form>

@endsection
