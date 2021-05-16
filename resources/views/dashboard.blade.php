@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                    <h3 class="mt-4">Your Blog Posts</h3>
                    @if (count($posts) > 0)
                        <table class="table table-striped" style="font-size: 1.1rem;">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                                    <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-secondary">Edit</a></td>
                                    <td>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="float-right">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $posts->links() }}
                    @else
                        <p class="mt-4">You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
