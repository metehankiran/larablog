@extends('layouts.app')
@section('script')
    <script>

        function featured(id){
            var status = $('input[type=checkbox]#featured-checkbox-id-'+id).val()
            $.ajax({
                type: 'post',
                url: '/admin/post/featured/'+id,
                data: $('#featured-form-'+id).serialize()+"&status="+status,
                success:function(data){
                    toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                    }
                   if(data == true){ 
                        toastr.success('Post set featured.')
                        $('input[type=checkbox]#featured-checkbox-id-'+id).val(1)
                    }
                   else if(data == false){
                        toastr.success('Post set not featured.')
                        $('input[type=checkbox]#featured-checkbox-id-'+id).val(1)
                   }
                   else{
                        toastr.error('Undefined error.')
                        $('input[type=checkbox]#featured-checkbox-id-'+id).val()
                   }
                },
                
            })
    }
    </script>
@endsection
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
                        <th scope="col">Featured</th>
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
                        <td>{{ $post->views() }}</td>
                        <td>
                            <form action="{{ route('posts.featured',$post->id) }}" method="post" id="featured-form-{{ $post->id }}">
                                @csrf
                                <div class="form-check text-center">
                                    <input class="form-check-input" id="featured-checkbox-id-{{ $post->id }}" type="checkbox" name="status" value="{{ $post->featured }}" @checked($post->featured == true) onclick="featured({{ $post->id }})">
                                  </div>
                            </form>
                        </td>
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
