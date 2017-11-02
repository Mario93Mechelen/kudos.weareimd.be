@extends('master')

@section('content')

        <img src="{{$user->avatar}}" alt="photo">
        <p>{{$user->name}}</p>

        <form method="POST" action="/compliments">
                {{csrf_field()}}
                <div class="form-group">
                <input type="text" name="compliment" class="form-control">
                </div>
                <input type="hidden" name="receiver" value="{{$user->id}}">
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Give Compliment</button>
                </div>
        </form>
@endsection