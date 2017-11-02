@extends('master')

@section('content')

    @foreach($users as $user)

        <a href="/users/user/{{$user->id}}"><img src="{{$user->avatar}}" alt="photo" class="img-circle"></a>

    @endforeach

@endsection