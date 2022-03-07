@if ($comments->where('parent_id',0)->count() > 0)
<div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
    <div class="widget-header-1 position-relative mb-30">
        <h5 class="mt-5 mb-30">Last comments</h5>
    </div>
    <div class="post-block-list post-module-2">
        <ul class="list-post">
            @foreach ($comments->where('parent_id',0)->reverse()->take(4) as $comment)
            <li class="wow fadeInUp animated @if(!$loop->last) mb-30 @endif">
                <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="#">
                            <img src="{{ Storage::url('public/images/default-user-profile-image.png') }}" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <p class="mb-10"><a href="#"><strong>{{ $comment->name }}</strong></a>
                            <span class="ml-15 font-small text-muted has-dot">{{ $comment->created_at->diffForHumans() }}</span>
                        </p>
                        <p class="text-muted font-small">{{ $comment->body }}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif