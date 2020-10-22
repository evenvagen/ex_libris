@extends('base')

@section('title')
 create_user
@endsection

@section('content')


<h1>Create profile</h1>
<form method="post" action="{{ route('users.store')}}">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Navn"/>
    </div>


    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>

    <div class="form-group">
        <input type="text" class="form-control" name="password" placeholder="Password" />
    </div>
    <button type="submit" class="btn btn-primary">Legg til bruker</button>
</form>

<br>

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
