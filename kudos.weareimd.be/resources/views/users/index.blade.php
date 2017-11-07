@extends('master')

@section('content')
<div class="flexbox">
    @foreach($users as $user)
    <div class="cell">
        <a href="/users/user/{{$user->id}}"><img src="{{$user->avatar}}" alt="photo" class="img-circle images"></a>
        <p>{{$user->name}}</p>
    </div>
    @endforeach
</div>
@endsection