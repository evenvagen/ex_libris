@extends('base')

@section('title')
 user_index
@endsection


@section('content')

@foreach($users as $user)

<p>{{$user->id}}</p>

@endforeach

@endsection
