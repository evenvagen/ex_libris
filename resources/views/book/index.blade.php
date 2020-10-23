@extends('base')

@section('title')
 view_books
@endsection


@section('content')

<h1>Books...</h1>

@foreach ($books as $book)

<p>{{$book->title}}-{{$book->author}}
    <b style="color:green">{{$book->ratings->avg('rating')}}</b>
</p>


@endforeach

@endsection
