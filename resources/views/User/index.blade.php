@extends('layouts.app')
@section('title','users')
@section('content')
<p> The users of swansea:</p>
<ul>
    @foreach($users as $user)
    <li><a href= "/users/{{$user ->id}}"->{{$user ->name}}</a></li>
    @endforeach
</ul>
    <a href="{{ route('user.create') }}">create user</a>
@endsection