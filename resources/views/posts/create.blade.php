@extends('layouts.app')

@section('content')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <h1>Create Post</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Blog Title">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" type="text" class="form-control" id="body" placeholder="Body Text"></textarea>
                    <script>
                        CKEDITOR.replace( 'body' );
                    </script>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection