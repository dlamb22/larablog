@extends('layouts.app')

@section('content')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <h1>Edit Post</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
            {{-- <form action="/posts/{{ $post->id }}" method="POST"> --}}
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input 
                    name="title" 
                    type="text" 
                    class="form-control" 
                    id="title" 
                    placeholder="Blog Title" 
                    value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea 
                    name="body" 
                    type="text" 
                    class="form-control" 
                    id="body" 
                    placeholder="Body Text">
                    {{ $post->body }}
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'body' );
                    </script>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection