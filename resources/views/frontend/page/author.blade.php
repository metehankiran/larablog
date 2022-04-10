@extends('frontend.layout')
@section('title', 'Author - '.$author->name)
@section('body')
<!-- Start Main content -->
<main class="bg-grey pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--author box-->
                <div class="author-bio mb-50 bg-white p-30 border-radius-10">
                    <div class="author-image mb-30">
                        <a href="{{ route('author', $author) }}"><img src="{{ Storage::url($author->image) }}" alt="{{ $author->name }}" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h3 class="font-weight-900"><span class="vcard author"><span class="fn"><a href="{{ route('author', $author) }}" title="Posts by {{ $author->name }}" rel="author">{{ $author->name }}</a></span></span>
                        </h3>
                        <h5 class="text-muted">About author</h5>
                        <div class="author-description text-muted">You should write because you love the shape of stories and sentences and the creation of different words on a page. Graduating from a top accelerator or incubator can be as career-defining for a startup founder as an
                            elite university diploma.</div>
                        <strong class="text-muted">Follow: </strong>
                        <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                            <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="post-module-2">
                    <div class="widget-header-2 position-relative mb-30  wow fadeInUp animated">
                        <h5 class="mt-5 mb-30">Posted by {{ $author->name }}</h5>
                    </div>
                    @if ($author->posts->count() > 0)
                    <div class="loop-list loop-list-style-1">
                        <div class="row">
                            @foreach ($author->posts_paginate()->take(2) as $post)
                            <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                <div class="post-card-1 border-radius-10 hover-up">
                                    <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Storage::url($post->image) }})">
                                        <a class="img-link" href="{{ route('post',$post) }}"></a>
                                        <ul class="social-share">
                                            <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                            <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                            <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content p-30">
                                        <div class="entry-meta meta-0 font-small mb-10">
                                            <a href="{{ route('category',$post->category) }}"><span class="post-cat text-info">{{ $post->category->title }}</span></a>
                                        </div>
                                        <div class="d-flex post-card-content" style="min-height:50px">
                                            <h5 class="post-title font-weight-900">
                                                <a href="{{ route('post',$post) }}">{{ $post->title }}</a>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">{{ $post->created_at->diffForHumans() }}</span>
                                                <span class="time-reading has-dot">12 mins read</span>
                                                <span class="post-by has-dot">{{ $post->views() }} views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                @if ($author->posts->count() > 2)
                <div class="post-module-3">
                    <div class="loop-list loop-list-style-1">
                        @foreach ($author->posts_paginate()->skip(2) as $post)
                        <article class="hover-up-2 transition-normal wow fadeInUp animated">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{ Storage::url($post->image) }})">
                                            <a class="img-link" href="{{ route('post',$post) }}"></a>
                                        </div>
                                        <ul class="social-share">
                                            <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                            <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                            <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8 align-self-center">
                                    <div class="post-content">
                                        <div class="entry-meta meta-0 font-small mb-10">
                                            <a href="{{ route('category',$post->category) }}"><span class="post-cat text-primary">{{ $post->category->title }}</span></a>
                                        </div>
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="{{ route('post',$post) }}">{{ $post->title }}</a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">7 August</span>
                                            <span class="time-reading has-dot">11 mins read</span>
                                            <span class="post-by has-dot">3k views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
                @endif
                {{ $author->posts_paginate()->links('vendor.pagination.bootstrap') }}
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->
@endsection