@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
            <h3 class="mb-4 mt-2">Create Post</h3>
            <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                @method('post')
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
                <div class="row mb-2">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example1">Category name</label>
                            <select name="category_id" value="{{ old('category_id') }}" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label">Keywords</label>
                            <input type="text" name="keywords" class="form-control" value="{{ old('title') }}"
                                placeholder="Etc: PHP, Laravel, Keywords..." />
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4 mt-2">
                    <label class="form-label" for="form3Example3">Post title</label>
                    <input type="text" name="title" id="form3Example3" class="form-control"
                        value="{{ old('title') }}" />
                </div>
                <div class="form-outline mb-4 mt-2">
                    <label>File input</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Post content</label>
                    <textarea name="content" class="form-control" cols="30" rows="10">{{ old('content') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Create post</button>
            </form>
        </div>
    </div>
</div>
@endsection
