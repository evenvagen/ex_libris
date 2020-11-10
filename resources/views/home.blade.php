@extends('layouts.dashboard')

@section('title')
 view_books
@endsection


@section('main')

<div class="container mt-5">

<h1 class="text-center text-success">Tilgjengelige bøker</h1>



<table class="table table-dark">
    <thead>
      <tr>
      <th scope="col">Tittel</th>
      <th scope="col">Forfatter</th>
      <th scope="col">Sjanger</th>
        <th scope="col">Leie</th>
      </tr>
    </thead>


    <tbody>
        @foreach ($books as $key => $book)
        @if($book->user_id == NULL)
      <tr>
      <td>{{$book->title}}</td>
      <td>{{$book->author}}</td>
      <th scope="col">{{$book->genre}}</th>
      <td>
        <button type="button" class="btn btn-outline-success btn-sm">+</button>
      </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>


</div>
@endsection
