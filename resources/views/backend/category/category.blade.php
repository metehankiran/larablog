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
            <h3 class="mb-4">Categories</h3>
            <p class="text-mute">You can see all the categories here.</p>

            <form action="{{ route('categories.store') }}" method="post">
                @csrf
                @method('post')
                <div class="row mb-2">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example1">Parent category</label>
                            <select name="parent_id" class="form-control">
                                <option value="0">Parent Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" >Category name</label>
                            <input type="text" name="title" class="form-control" placeholder="Etc: Frameworks" />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Create category</button>
            </form>
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Parent Title</th>
                        <th scope="col">Has Article</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <th>{{ $category->title }}</th>
                        <th>
                            @if ($category->parent_id == 0)
                            <span class="text-danger">Parent Category</span>
                            @else
                            {{ $category->parent->title}}
                            @endif
                        </th>
                        <th>{{ $category->posts->count() }}</th>
                        <th>
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
