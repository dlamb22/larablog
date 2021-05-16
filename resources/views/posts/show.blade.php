@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Created on {{ $post->created_at }}</small>
    <hr>
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="float-right">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection