@extends('master')

@section('content')
    <h1 class="align-center">My Given Compliments</h1>
    <div class="d-flex flex-column flex-wrap justify-content-around w-80 align-center">
    @foreach($compliments as $compliment)

        <p class="p-2">{{$compliment->body}}</p>

    @endforeach
    </div>
@endsection