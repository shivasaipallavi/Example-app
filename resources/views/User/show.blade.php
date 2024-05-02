@extends('layouts.app')

@section('title', 'user Details')

@section('content')
    <ul>
        <li>Name: {{ $user->name}}</li>
        <li>email:{{ $user->email}}</li>
    </ul>
@endsection