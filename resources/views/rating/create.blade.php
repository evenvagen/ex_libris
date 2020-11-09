@extends('dashboard')

@section('title')
rate_bok
@endsection



@section('main')

<div class="container mt-5">

<h1>Rate books...</h1>

<form method="post" action="{{ route('ratings.store')}}">
    @csrf
    <div class="form-group">
    <input type="hidden" value="{{ Auth::user()->id }}"/>
    </div>




    <select class="form-control" name="rating" placeholder="Vurdering">
        @foreach($books as $book)
        @if(Auth::user()->id == $book->user_id)
    <option value="{{$book->id}}">{{$book->title}}</option>
    @endif
    @endforeach
</select>



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
