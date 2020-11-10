@extends('layouts.base')

@section('title')
home_page
@endsection


@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href=" {{ route('dashboard') }} ">📚</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Hjem <span class="sr-only">(current)</span></a>
            </li>
            {{-- Ternary operator --}}
            <li class="nav-item">
            <a class="nav-link" href="{{ route('books.index')}}">Bokhylle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ratings.create')}}">Vurder bøker</a>
                </li>
            <li class="nav-item dropdown">
            </li>
          </ul>
        </div>



         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logg ut') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </nav>

      @yield('main')


@endsection
