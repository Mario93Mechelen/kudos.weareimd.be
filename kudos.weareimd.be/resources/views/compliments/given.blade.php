@extends('master')

@section('content')
    <div class="d-flex flex-column flex-wrap justify-content-around">
        <h1>My Given Compliments</h1>
    @foreach($compliments as $compliment)

        <p class="p-2">{{$compliment->body}}</p>

    @endforeach
    </div>
@endsection