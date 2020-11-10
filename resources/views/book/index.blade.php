@extends('layouts.dashboard')

@section('title')
 view_books
@endsection


@section('main')

<div class="container mt-5">

<h1 class="text-center text-success">Bokhylle</h1>



<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
      <th scope="col">Tittel</th>
      <th scope="col">Forfatter</th>
      <th scope="col">Sjanger</th>
        <th scope="col">Rating</th>
      </tr>
    </thead>


    <tbody>
        @foreach ($books as $key => $book)
        @if(Auth::user()->id == $book->user_id)
      <tr>
      <th scope="row">{{$key +1}}</th>
      <td>{{$book->title}}</td>
      <td>{{$book->author}}</td>
      <th scope="col">{{$book->genre}}</th>
      <td class="text-success">{{round($book->ratings->avg('rating'), 1)}}</td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>


</div>
@endsection
