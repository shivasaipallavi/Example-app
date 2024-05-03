
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@extends('layouts.app')@extends('layouts.app')
@section('title','Post Details')
@section('content')
<ul>
    <li>Name:{{ $post->content}}</li>
    <li>User Id:{{ $post->user_id}}</li>
    <li>User name : {{ $post->user->name}}</li>
    <li>Email : {{ $post->user->email}}</li>
</ul>

<table style="width:100%;">
    <tbody>
        <tr>
            <td>
            <form method="POST"
                action="{{route('post.destroy', ['id' =>$post->id])}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
                
            </form>
            </td>
            <td>
                @if(Auth::user())
                <a href="/postsedit/{{$post->id}}">Edit your  post?</a>
                @endif
            </td>
        </tr>
    </tbody>
</table>
<p><a href="{{route('post.index')}}">Back</a>
@endsection