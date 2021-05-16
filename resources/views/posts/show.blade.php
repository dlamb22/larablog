@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary btn-sm">Go Back</a>
    <h1 class="mt-4 mb-3">{{ $post->title }}</h1>
    <img src="/storage/cover_images/{{ $post->cover_image }}" style="width: 100%; height: 550px;" alt="Cover Image">
    <div class="pt-5 pb-2">
        {!! $post->body !!}
    </div>
    <hr>
    <small>Created on {{ $post->created_at }} by {{ $post->user->name }}</small>
    @if (!Auth::guest() && Auth::user()->id == $post->user_id)
        <hr>
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="float-right">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    @endif
@endsection