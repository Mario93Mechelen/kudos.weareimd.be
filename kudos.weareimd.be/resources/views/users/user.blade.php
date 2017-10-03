@extends('master')

@section('content')

        <img src="{{$user->avatar}}" alt="photo">
        <p>{{$user->name}}</p>


@endsection