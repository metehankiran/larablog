@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
            <h3 class="mb-4 mt-2">Edit Post - <span class="text-muted">{{ $post->title }}</span></h3>
            <form method="post" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row mb-2">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example1">Category name</label>
                            <select name="category_id" value="{{ old('category_id') }}" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $post->category_id) selected
                                    @endif>{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label">Keywords</label>
                            <input type="text" name="keywords" class="form-control" value="{{ $post->keywords }}"
                                placeholder="Etc: PHP, Laravel, Keywords..." />
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger" style="padding:1rem 1rem 0 1rem">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <div class="form-outline mb-4 mt-2">
                    <label class="form-label" for="form3Example3">Post title</label>
                    <input type="text" name="title" id="form3Example3" class="form-control"
                        value="{{ $post->title }}" />
                </div>
                <div class="form-outline mb-4 mt-2">
                    <label>Post image</label>
                    <input type="file" name="image" class="form-control">
                    @if (isset($post->image))
                    <a href="{{ Storage::url($post->image) }}" target="_blank">Current image</a>
                    @endif
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Post content</label>
                    <textarea name="content" class="form-control" cols="30" rows="10">{{ $post->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Edit post</button>
            </form>
        </div>
    </div>
</div>
@endsection
