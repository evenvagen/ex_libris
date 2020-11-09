@extends('dashboard')

@section('title')
 view_books
@endsection


@section('main')

<div class="container mt-5">

<h1>Books...</h1>



<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
      <th scope="col">Tittel</th>
      <th scope="col">Forfatter</th>
        <th scope="col">Rating</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($books as $key => $book)
      <tr>
      <th scope="row">{{$key +1}}</th>
      <td>{{$book->title}}</td>
      <td>{{$book->author}}</td>
      <td>{{$book->ratings->avg('rating')}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>
@endsection
