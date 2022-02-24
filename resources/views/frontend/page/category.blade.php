@extends('frontend.layout')
@section('body')

@php
[$underTwo, $others] = $posts->partition(function ($posts, $count=0){
    if($count < 2){
        $count++;
        return $posts;
    } 
}); 
@endphp 
<main>
    <!--archive header-->
    <div class="archive-header pt-50 text-center">
        <div class="container">
            <h2 class="font-weight-900">{{ $category->title }}</h2>
            <div class="breadcrumb">
                <a href="#" rel="nofollow">{{ $category->title }}</a>
                {{-- <span></span> Guides --}}
            </div>
            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
        </div>
    </div>
    <div class="container">
        <div class="loop-grid mb-30">
            <div class="row">
                <div class="col-lg-8 mb-30">
                    <div
                        class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                        <div class="arrow-cover"></div>
                        <div class="slide-fade">
                            @foreach ($underTwo->all() as $post)
                            <div class="position-relative post-thumb">
                                <div class="thumb-overlay img-hover-slide position-relative"
                                    style="background-image: url({{ Storage::url($post->image) }})">
                                    <a class="img-link" href="{{ route('post', $post->slug) }}"></a>
                                    <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                        <h3 class="post-title font-weight-900 mb-20">
                                            <a class="text-white" href="{{ route('post', $post->slug) }}">{{ $post->title }}</a>
                                        </h3>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">{{ $post->updated_at->diffForHumans() }}</span>
                                            <span class="hit-count has-dot">{{ $post->views() }} Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @foreach ($others->all() as $post)
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                            style="background-image: url({{ Storage::url($post->image) }})">
                            <a class="img-link" href="{{ route('post', $post->slug) }}"></a>
                            <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                            class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                            class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                            class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a href="{{ route('post',$post->slug) }}">{{ $post->title }}</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">{{ $post->updated_at->diffForHumans() }}</span>
                                    <span class="time-reading has-dot">? mins read</span>
                                    <span class="post-by has-dot">{{ $post->views() }} views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="row mt-50">
                <div class="col-12">
                    <div class="pagination-area mb-30 wow fadeInUp animated">
                        <nav aria-label="Page navigation example">
                            {{ $posts->links('vendor.pagination.custom') }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    @endsection
