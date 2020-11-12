@extends('layouts.dashboard')

@section('title')
rate_bok
@endsection



@section('main')

<div class="container mt-5">


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





<div class="rating">
    @for($i = 5; $i >= 1; $i--)
<input type="radio" name="rating" value="{{$i}}" id="{{$i}}"><label for="{{$i}}">☆</label>
    @endfor
</div>


<textarea name="review"></textarea>


    <br>




    <button type="submit" class="btn btn-outline-success">Legg til vurdering</button>

</div>
</form>

@endsection
