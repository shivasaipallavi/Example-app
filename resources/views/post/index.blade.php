
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">@extends('layouts.app')
@section('title','posts')
@section('content')
<p> The posts of swansea:</p>
<ul>
        @foreach($posts as $post)
             <li><a href="/posts/{{$post->id}}">{{$post->content}}</a></li>
        @endforeach 
</ul>
<a href="{{route('posts.create')}}">Create Post</a> 
{{ $posts->links()}}
@endsection