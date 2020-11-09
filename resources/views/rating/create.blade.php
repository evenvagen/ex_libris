@extends('layouts.dashboard')

@section('title')
rate_bok
@endsection



@section('main')

<div class="container mt-5">

<h1>Rate books...</h1>

<form method="post" action="{{ route('ratings.store')}}">
    @csrf
    <div class="form-group">
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
    </div>




    <select class="form-control-lg" name="book_id" placeholder="Vurdering">
        @foreach($books as $book)
        @if(Auth::user()->id == $book->user_id)
    <option value="{{$book->id}}">{{$book->title}}</option>
    @endif
    @endforeach
</select>



    <select class="form-control" name="rating" placeholder="Vurdering">
        @for($i = 0; $i < 5; $i++)
    <option value="{{$i+1}}">{{$i+1}}</option>
        @endfor
    </select>


    <br>




    <button type="submit" class="btn btn-outline-success">Legg til vurdering</button>

</div>
</form>

@endsection
