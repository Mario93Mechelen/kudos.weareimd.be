@extends('master')

@section('content')
    <div class="usercontainer">
        <img src="{{$user->avatar}}" alt="fotoke">
        <p class="align-center">Welcome, {{$user->name}}</p>
        <p class="align-center">You have {{$numCompliments}} new compliments</p>
    </div>
@endsection