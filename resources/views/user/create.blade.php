@extends('base')

@section('title')
 create_user
@endsection

@section('content')



<form method="post" action="{{ route('users.store')}}">
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

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
