@extends('layouts.app')

@section('title', 'User Detail')

@section('content')
    <form method="POST" action="{{ route('post.update', ['id'=>$post->id]) }}">
        @csrf
        @method('PUT')

        <div>
            <p for="content">User Post`</p>
            <textarea id="content" class="form-control" name="content" rows="5" required>{{ $post->content }}</textarea>
        </div>

        <button type="submit">Update Post</button> 
    </form>
@endsection