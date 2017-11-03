@extends('master')

@section('content')
<div class="d-flex flex-row flex-wrap justify-content-around">
    @foreach($users as $user)
    <div class="p-2">
        <a href="/users/user/{{$user->id}}"><img src="{{$user->avatar}}" alt="photo" class="img-circle images"></a>
    </div>
    @endforeach
</div>
@endsection