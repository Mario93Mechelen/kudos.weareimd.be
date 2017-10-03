@extends('master')

@section('content')

    @foreach($compliments as $compliment)

        <p>{{$compliment->body}}</p>

    @endforeach

@endsection