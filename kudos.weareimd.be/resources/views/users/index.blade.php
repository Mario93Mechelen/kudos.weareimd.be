@extends('master')

@section('content')

    @foreach($users as $user)

        <img src="{{$user->avatar}}" alt="photo">
        <p>{{$user->name}}</p>

    @endforeach

@endsection