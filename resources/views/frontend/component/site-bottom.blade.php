<div class="site-bottom pt-50 pb-50">
    <div class="container">
        <div class="row">
            @empty(!$randomCategories)
            @foreach ($randomCategories->take(3) as $category)    
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">{{ $category->title }}</h5>
                    </div>
                    <div class="post-block-list post-module-1">
                        <ul class="list-post">
                            @foreach ($category->posts()->inRandomOrder()->take(3)->get() as $post)
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="single.html">
                                            <img src="{{ Storage::url($post->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">{{ $post->title }}</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">{{ $post->created_at->diffForHumans() }}</span>
                                            <span class="post-by has-dot">{{ $post->views() }} views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            @endempty
        </div>
        <div class="sidebar-widget widget-latest-posts mb-30 mt-20 wow fadeInUp animated">
            <div class="widget-header-2 position-relative mb-30">
                <h5 class="mt-5 mb-30">Categories</h5>
            </div>
            <div class="carausel-3-columns">
                @foreach ($parentCategories as $category)
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="{{ route('category',$category) }}">
                            <img src="{{ asset('frontend/assets') }}/imgs/news/thumb-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6> <a href="{{ route('category',$category) }}">{{ $category->title }}</a> </h6>
                        <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--container-->
</div>