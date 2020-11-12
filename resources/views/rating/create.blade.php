@extends('layouts.dashboard')

@section('title')
rate_bok
@endsection



@section('main')




<form method="post" action="{{ route('ratings.store')}}">
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

<div class="container d-flex justify-content-center">
    <div class="card mt-5 pb-3 bg-dark">
        <div class="d-flex flex-row justify-content-between p-3 adiv text-white"> <i class="fas fa-chevron-left"></i> <span>Bokvurdering</span> <i class="fas fa-times"></i> </div>
        <div class="mt-2 p-4 text-center">

            <select class="form-control-lg mb-3 btn-block" name="book_id" placeholder="Vurdering">
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
            <div class="form-group mt-4"> <textarea name="review" class="form-control mb-4" rows="9" placeholder="Kommentar til boken (valgfritt)"></textarea> </div>
            <div class="mt-2"> <button type="submit" class="btn btn-outline-success btn-block"><span>Send</span></button> </div>

        </div>
    </div>
</div>

</form>

@endsection
