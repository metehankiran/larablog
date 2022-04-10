@foreach ($suggestedPosts as $suggestedPost)
<li class="mb-{{ $loop->first ? '30' : '10' }}">
    <div class="d-flex hover-up-2 transition-normal">
        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
            <a class="color-white" href="{{ route('post',$suggestedPost) }}">
                <img src="{{ Storage::url($suggestedPost->image) }}" alt="{{ $suggestedPost->title }}">
            </a>
        </div>
        <div class="post-content media-body">
            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                    href="{{ route('post',$suggestedPost) }}">{{ $suggestedPost->title }}</a></h6>
            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                <span class="post-on">{{ $suggestedPost->created_at->diffForHumans() }}</span>
                <span class="post-by has-dot">{{ $suggestedPost->views() }} views</span>
            </div>
        </div>
    </div>
</li>
@endforeach
