@extends('frontend.layout')
@section('title', 'Search Keyword : '.$query)
@section('body')
<div class="archive-header pt-50">
    <div class="container">
        <h2 class="font-weight-900">Search results</h2>
        <div class="breadcrumb">
            We found {{ $count }} article{{ $count > 1 ? 's' : null }} for <strong>"{{ $query }}" </strong> key word
        </div>
        <div class="bt-1 border-color-1 mt-30 mb-50"></div>
    </div>
</div>
<div class="pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-module-3">                         
                    <div id="result" class="loop-list loop-list-style-1" style="overflow-x: hidden; overflow-y: scroll;"">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    @if($setting->user_about) @include('frontend.component.about')@endif
                    @if($setting->most_popular) @include('frontend.component.most-popular')@endif
                    @if($setting->last_comments) @include('frontend.component.last-comments')@endif
                    @if($setting->instagram) @include('frontend.component.instagram')@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    var page = 1;
    function loadData(page) {
        return new Promise((resolve, rejected) => {
            $.ajax({
            url: "{{ route('search.post') }}",
            type: "post",
            data: {
                query: "{{ $query }}",
                page: page,
                perPage : 5,
                count: {{ $count }},
                _token: "{{ csrf_token() }}"
            },
            beforeSend: function() {
                $('.preloader').fadeIn('slow');
            },
            success: function (data) {
                $('.preloader').fadeOut('slow');
                $('#result').append(data.html);
                resolve()
                if(page == 1){
                    var resultHeight = $('#result').height();
                    $('#result').height(resultHeight-1);
                }
            }
        });
        })
    }
    $(document).ready(function () {
        loadData(1);
    });
    $('#result').scroll(function(){
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight && page < {{ ceil($count / 5) }}) {
            page++;
            loadData(page);
        }
    });
</script>
@endsection