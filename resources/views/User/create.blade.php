@extends('layouts.app')
@section('title', 'create User')
@section('content')
<form method= "POST" action="{{route('user.store')}}">
@csrf
<p>Name: <input type="text" name="name"></p>
<p>email: <input type="text" name="email"></p>
<input type="submit" value="submit">
<a href="{{ route('user.index')}}">cancel</a>
</form>
@endsection
