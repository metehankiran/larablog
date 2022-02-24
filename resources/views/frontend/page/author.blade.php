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
            <div class="col-lg-8">
                <div class="post-module-2">
                    <div class="widget-header-2 position-relative mb-30  wow fadeInUp animated">
                        <h5 class="mt-5 mb-30">Posted by Steven</h5>
                    </div>
                    <div class="loop-list loop-list-style-1">
                        <div class="row">
                            <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                <div class="post-card-1 border-radius-10 hover-up">
                                    <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-6.jpg)">
                                        <a class="img-link" href="single.html"></a>
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
                                                <a href="single.html">Easy Ways to Use Alternatives to Plastic</a>
                                            </h5>
                                            <div class="post-excerpt mb-25 font-small text-muted">
                                                <p>Graduating from a top accelerator or incubator can be as career-defining for a&nbsp;startup founder&nbsp;as an elite university diploma. The intensive programmes, which…</p>
                                            </div>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 August</span>
                                                <span class="time-reading has-dot">12 mins read</span>
                                                <span class="post-by has-dot">23k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                <div class="post-card-1 border-radius-10 hover-up">
                                    <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-8.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                        <ul class="social-share">
                                            <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                            <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                            <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content p-30">
                                        <div class="entry-meta meta-0 font-small mb-10">
                                            <a href="category.html"><span class="post-cat">Fashion</span></a>
                                        </div>
                                        <div class="d-flex post-card-content">
                                            <h5 class="post-title mb-20 font-weight-900">
                                                <a href="single.html">Tips for Growing Healthy, Longer Hair</a>
                                            </h5>
                                            <div class="post-excerpt mb-25 font-small text-muted">
                                                <p>Proin vitae placerat quam. Ut sodales eleifend urna, in condimentum tortor ultricies eu. Nunc auctor iaculis dolorProin vitae placerat quam. Proin vitae placerat quam.</p>
                                            </div>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">12 August</span>
                                                <span class="time-reading has-dot">6 mins read</span>
                                                <span class="post-by has-dot">3k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="post-module-3">
                    <div class="loop-list loop-list-style-1">
                        <article class="hover-up-2 transition-normal wow fadeInUp animated">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-13.jpg)">
                                            <a class="img-link" href="single.html"></a>
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
                                            <a href="category.html"><span class="post-cat text-primary">Food</span></a>
                                        </div>
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="single.html">Helpful Tips for Working from Home as a Freelancer</a>
                                            <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
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
                        <article class="hover-up-2 transition-normal wow fadeInUp animated">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-4.jpg)">
                                            <a class="img-link" href="single.html"></a>
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
                                            <a href="category.html"><span class="post-cat text-success">Cooking</span></a>
                                        </div>
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="single.html">10 Easy Ways to Be Environmentally Conscious At Home</a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">27 Sep</span>
                                            <span class="time-reading has-dot">10 mins read</span>
                                            <span class="post-by has-dot">22k views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="hover-up-2 transition-normal wow fadeInUp animated">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-2.jpg)">
                                            <a class="img-link" href="single.html"></a>
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
                                            <a href="category.html"><span class="post-cat text-warning">Cooking</span></a>
                                        </div>
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="single.html">My Favorite Comfies to Lounge in At Home</a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">7 August</span>
                                            <span class="time-reading has-dot">9 mins read</span>
                                            <span class="post-by has-dot">12k views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="hover-up-2 transition-normal wow fadeInUp animated">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-3.jpg)">
                                            <a class="img-link" href="single.html"></a>
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
                                            <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                                        </div>
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="single.html">How to Give Your Space a Parisian-Inspired Makeover</a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">27 August</span>
                                            <span class="time-reading has-dot">12 mins read</span>
                                            <span class="post-by has-dot">23k views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="hover-up-2 transition-normal wow fadeInUp animated">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-4.jpg)">
                                            <a class="img-link" href="single.html"></a>
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
                                            <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                                        </div>
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="single.html">How to Give Your Space a Parisian-Inspired Makeover</a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">27 August</span>
                                            <span class="time-reading has-dot">12 mins read</span>
                                            <span class="post-by has-dot">23k views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="hover-up-2 transition-normal wow fadeInUp animated">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-5.jpg)">
                                            <a class="img-link" href="single.html"></a>
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
                                            <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                                        </div>
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="single.html">How to Give Your Space a Parisian-Inspired Makeover</a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">27 August</span>
                                            <span class="time-reading has-dot">12 mins read</span>
                                            <span class="post-by has-dot">23k views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="pagination-area mb-30 wow fadeInUp animated">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item"><a class="page-link" href="#"><i class="elegant-icon arrow_left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="elegant-icon arrow_right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 primary-sidebar sticky-sidebar">
                <div class="widget-area">
                    <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Most popular</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                @foreach ($author->posts->sortBy('views')->reverse()->take(4) as $post)
                                <li class="mb-30 wow fadeInUp animated">
                                    <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="{{ route('post',$post) }}">{{ $post->title }}</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">{{ $post->created_at->diffForHumans() }}</span>
                                                <span class="post-by has-dot">{{ $post->views }} views</span>
                                            </div>
                                        </div>
                                        <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="{{ route('post', $post) }}">
                                                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Last comments</h5>
                        </div>
                        <div class="post-block-list post-module-2">
                            <ul class="list-post">
                                <li class="mb-30 wow fadeInUp animated">
                                    <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                        <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/authors/author-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <p class="mb-10"><a href="author.html"><strong>David</strong></a>
                                                <span class="ml-15 font-small text-muted has-dot">16 Jan 2020</span>
                                            </p>
                                            <p class="text-muted font-small">A writer is someone for whom writing is more difficult than...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30 wow fadeInUp animated">
                                    <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                        <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/authors/author-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <p class="mb-10"><a href="author.html"><strong>Kokawa</strong></a>
                                                <span class="ml-15 font-small text-muted has-dot">12 Feb 2020</span>
                                            </p>
                                            <p class="text-muted font-small">Striking pewter studded epaulettes silver zips</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp animated">
                                    <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                        <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <p class="mb-10"><a href="author.html"><strong>Tsukasi</strong></a>
                                                <span class="ml-15 font-small text-muted has-dot">18 May 2020</span>
                                            </p>
                                            <p class="text-muted font-small">Workwear bow detailing a slingback buckle strap</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Instagram</h5>
                        </div>
                        <div class="instagram-gellay">
                            <ul class="insta-feed">
                                <li>
                                    <a href="assets/imgs/thumbnail-3.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="assets/imgs/thumbnail-4.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="assets/imgs/thumbnail-5.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="assets/imgs/thumbnail-3.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="assets/imgs/thumbnail-4.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="assets/imgs/thumbnail-5.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-6.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->
@endsection