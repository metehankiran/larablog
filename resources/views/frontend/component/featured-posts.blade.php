@if ($posts->where('featured')->count() > 0)
@php
    $featured_posts = $posts->where('featured');
    if($featured_posts->count() >= 2){
        $one_post = $featured_posts->shift(1);
        if($featured_posts->count() >= 4){
            $three_post = $featured_posts->shift(3);
        }
    }
@endphp
<div class="container">
    <div class="hot-tags pt-30 pb-30 font-small align-self-center">
        <div class="widget-header-3">
            <div class="row align-self-center">
                <div class="col-md-4 align-self-center">
                    <h5 class="widget-title">Featured posts</h5>
                </div>
                <div class="col-md-8 text-md-right font-small align-self-center">
                    <p class="d-inline-block mr-5 mb-0"><i class="elegant-icon  icon_tag_alt mr-5 text-muted"></i>Hot tags:</p>
                    <ul class="list-inline d-inline-block tags">
                        <li class="list-inline-item"><a href="#"># Covid-19</a></li>
                        <li class="list-inline-item"><a href="#"># Inspiration</a></li>
                        <li class="list-inline-item"><a href="#"># Work online</a></li>
                        <li class="list-inline-item"><a href="#"># Stay home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="loop-grid mb-30">
        <div class="row">
            <div class="{{ ($posts->where('featured')->count() == 1) ? 'col-lg-12' : 'col-lg-8' }} mb-30">
                <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                    <div class="arrow-cover"></div>
                    <div class="slide-fade">
                        @foreach ($featured_posts as $item)
                        <div class="position-relative post-thumb">
                            <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Storage::url($item->image) }})">
                                <a class="img-link" href="{{ route('post', $item) }}"></a>
                                <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                    <div class="entry-meta meta-0 font-small mb-20">
                                        <a href="category.html"><span class="post-cat text-info text-uppercase">{{ $item->category->title }}</span></a>
                                    </div>
                                    <h3 class="post-title font-weight-900 mb-20">
                                        <a class="text-white" href="single.html">{{ $item->title }}</a>
                                    </h3>
                                    <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                        <span class="post-on">{{ $item->created_at->diffForHumans() }}</span>
                                        <span class="hit-count has-dot">{{ $item->views() }} Views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @if (isset($one_post))
            <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                <div class="post-card-1 border-radius-10 hover-up">
                    <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Storage::url($one_post->image) }})">
                        <a class="img-link" href="{{ route('post',$one_post) }}"></a>
                        <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                        <ul class="social-share">
                            <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                            <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                            <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="post-content p-30">
                        <div class="entry-meta meta-0 font-small mb-10">
                            <a href="{{ route('category', $one_post->category) }}"><span class="post-cat text-info">{{ $one_post->category->title }}</span></a>
                        </div>
                        <div class="d-flex post-card-content">
                            <h5 class="post-title mb-20 font-weight-900">
                                <a href="{{ route('post',$one_post) }}">{{ $one_post->title }}</a>
                            </h5>
                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                <span class="post-on">{{ $one_post->created_at->diffForHumans() }}</span>
                                <span class="time-reading has-dot">12 mins read</span>
                                <span class="post-by has-dot">{{ $one_post->views() }} views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            @if(isset($three_post))
            @foreach ($three_post as $item)
            <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                <div class="post-card-1 border-radius-10 hover-up">
                    <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ Storage::url($item->image) }})">
                        <a class="img-link" href="{{ route('post',$item) }}"></a>
                        <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                        <ul class="social-share">
                            <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                            <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                            <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="post-content p-30">
                        <div class="entry-meta meta-0 font-small mb-10">
                            <a href="{{ route('category', $item->category) }}"><span class="post-cat text-info">{{ $item->category->title }}</span></a>
                        </div>
                        <div class="d-flex post-card-content">
                            <h5 class="post-title mb-20 font-weight-900">
                                <a href="{{ route('post',$item) }}">{{ $item->title }}</a>
                            </h5>
                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                <span class="post-on">{{ $item->created_at->diffForHumans() }}</span>
                                <span class="time-reading has-dot">12 mins read</span>
                                <span class="post-by has-dot">{{ $item->views() }} views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
            @endif
            @endif
        </div>
    </div>
</div>
@endif