@extends('base')

@section('title')
home_page
@endsection


@section('content')

{{-- <livewire:counter /> --}}

{{-- <livewire:hello-world /> --}}


<livewire:show-posts post="bigdata" />
@endsection
