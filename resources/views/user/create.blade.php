@extends('base')

@section('content')

<form method="post" action="{{ route('make.users')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name"/>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email"/>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" class="form-control" name="password"/>
    </div>
    <button type="submit" class="btn btn-primary-outline">Legg til bruker</button>
</form>

@endsection
