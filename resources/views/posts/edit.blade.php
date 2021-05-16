@extends('layouts.app')

@section('content')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <h1>Edit Post</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
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
                <div class="form-group">
                    <input name="cover_image" type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <a href="/posts/{{ $post->id }}" class="btn btn-secondary">Go Back</a>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
@endsection