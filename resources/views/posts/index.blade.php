@extends('layouts.app')

@section('content')
    <h1>POSTS</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card my-3">
                <div class="card-body">
                    <h3>{{ $post->title }}</h3>
                    <small>Created on {{ $post->created_at }}</small>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found.</p>
    @endif
@endsection