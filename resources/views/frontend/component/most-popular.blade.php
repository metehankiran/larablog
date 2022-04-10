@if ($viewCount->count() > 0)
<div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
    <div class="widget-header-1 position-relative mb-30">
        <h5 class="mt-5 mb-30">Most popular</h5>
    </div>
    <div class="post-block-list post-module-1">
        <ul class="list-post">
            @foreach ($viewCount->sortBy('views')->reverse()->take(4) as $post)
            @php
                $article = \App\Models\Post::find($post->post_id); 
            @endphp
            <li class="@if(!$loop->last)mb-30 @endif mb-30 wow fadeInUp animated">
                <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                    <div class="post-content media-body">
                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="{{ route('post',$article->slug) }}">{{ $article->title }}</a></h6>
                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                            <span class="post-on">{{ $article->updated_at->diffForHumans() }}</span>
                            <span class="post-by has-dot">{{ $article->views() }} views</span>
                        </div>
                    </div>
                    <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="single.html">
                            <img src="{{ Storage::url($article->image) }}" alt="">
                        </a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif