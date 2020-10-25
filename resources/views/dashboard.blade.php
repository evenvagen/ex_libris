@extends('base')

@section('title')
home_page
@endsection


@section('content')

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffa500;" >
    <a class="navbar-brand" href=" {{ route('dashboard') }} ">📚</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            {{-- Ternary operator --}}
            <li class="nav-item">
            <a class="nav-link" href="{{ route('books.index')}}">Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ratings.create')}}">Rate books</a>
                </li>
            <li class="nav-item dropdown">
            </li>
          </ul>
        </div>
      </nav>

      @yield('main')


@endsection
