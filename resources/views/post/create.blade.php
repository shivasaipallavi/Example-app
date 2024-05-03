@extends('layouts.app')
@section('title', 'create Post')
@section('content')
<form method= "POST" action="{{route('post.store')}}">
@csrf
<p>Name: <input type="text" name="content"></p>
<input type="submit" value="submit">
<a href="{{ route('post.index')}}">cancel</a>
</form>
@endsection
