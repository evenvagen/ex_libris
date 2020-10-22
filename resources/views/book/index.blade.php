@extends('base')

@section('title')
 view_books
@endsection


@section('content')

<h1>Books...</h1>

@foreach ($books as $book)

<p>{{$book->title}} ({{$book->author}})</p>

@foreach($book->ratings as $bookrating)

<p>{{$bookrating->rating}}</p>

@endforeach

@endforeach

@endsection
