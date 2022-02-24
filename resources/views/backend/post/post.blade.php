@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h3 class="mb-4">Posts</h3>
            <p class="text-mute">You can see all the shared posts here.</p>
            <a href="{{ route('posts.create' )}}">Create Post</a>
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Views</th>
                        <th scope="col">Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td><a href="{{ route('posts.show',$post->id) }}">{{ $post->title }}</a></td>
                        <td>{{ $post->category->title }}</td>
                        <td>{{ $post->author_id }}</td>
                        <td>{{ $post->views }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>
                            <a href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            <form id="form-delete-{{ $post->id }}" action="{{ route('posts.destroy',$post->id) }}" method="post" style="display:none">
                            @csrf
                            @method('delete')
                            </form>
                            <a href="javascript:void(0)" onclick="document.getElementById('form-delete-{{ $post->id }}').submit()">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
