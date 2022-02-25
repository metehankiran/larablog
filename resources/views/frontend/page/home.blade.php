
@extends('frontend.layout')
@section('body')
<main>       
    @include('frontend.component.slider')      
    <!-- End feature -->
    @include('frontend.component.featured-posts')
    @php
        $category = $randomCategories->take(1)->first();
    @endphp
    <div class="bg-grey pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-2">
                        <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                            <h5 class="mt-5 mb-30">{{ $category->title }}</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                @foreach ($category->posts()->take(4)->get() as $post)
                                <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Storage::url($post->image) }})">
                                            <a class="img-link" href="{{ route('post', $post) }}"></a>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span class="post-cat text-info">Artists</span></a>
                                                <a href="category.html"><span class="post-cat text-success">Film</span></a>
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a href="{{ route('post', $post) }}">{{ $post->title }}</a>
                                                </h5>
                                                <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>{{ $post->description }}</p>
                                                </div>
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
                    </div>
                    @include('frontend.component.latest-posts')
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        @include('frontend.component.about')
                        @include('frontend.component.most-popular')
                        @include('frontend.component.last-comments')
                        @include('frontend.component.instagram')
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection