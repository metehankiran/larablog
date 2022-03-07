<!--Comments-->
<div class="comments-area">
    <div class="widget-header-2 position-relative mb-30">
        <h5 class="mt-5 mb-30">Comments</h5>
    </div>
    @foreach ($comments->where('parent_id', null)->all() as $comment)
    <div class="comment-list wow fadeIn animated">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="{{ Storage::url('public/images/default-user-profile-image.png') }}" alt="">
                </div>
                <div class="desc">
                    <p class="comment">
                        {{ $comment->body }}
                    </p>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5>
                                <a href="#">{{ $comment->name }}</a>
                            </h5>
                            <p class="date">{{ $comment->created_at }}</p>
                        </div>
                        <div class="reply-btn ml-4">
                            <a href="#commentForm" class="btn-reply" onclick="sendParentId({{ $comment->id }}, '{{ $comment->name }}', '{{ $comment->body }}')">Reply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($comment->replies as $reply)
        @if ($reply->parent_id == $comment->id)
        <div class="single-comment depth-2 justify-content-between d-flex mt-50">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="{{ Storage::url('public/images/default-user-profile-image.png') }}" alt="">
                </div>
                <div class="desc">
                    <p class="comment">
                        {{ $reply->body }}
                    </p>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5>
                                <a href="#">{{ $reply->name }}</a>
                            </h5>
                            <p class="date">{{ $reply->created_at }}</p>
                        </div>
                        <div class="reply-btn ml-4">
                            <a href="#commentForm" class="btn-reply" onclick="sendParentId({{ $comment->id }},'{{ $reply->name }}','{{ $reply->body }}')">Reply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @endforeach
</div>
<!--comment form-->
<div class="comment-form wow fadeIn animated">
    <div class="widget-header-2 position-relative mb-30">
        <h5 class="mt-5 mb-30">Leave a Reply</h5>
        <div class="reply">
            <p>You reply to: <strong id="repliedUser"></strong></p>
            <p>You are reply on this: <span class="font-italic" id="replyOnThis"></span></p>
        </div>
    </div>
    <form class="form-contact comment_form" action="{{ route('comments.store') }}" method="post" id="commentForm">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <input type="hidden" name="parent_id" value="0">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="body" id="comment" cols="30" rows="9"
                        placeholder="Write Comment"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn button button-contactForm">Post Comment</button>
        </div>
    </form>
</div>
@section('script')
<script>
    $(document).ready(function(){
        $('.reply').hide();
    });
    function sendParentId(parentId,name,body) {
        $("input[name='parent_id']").val(parentId);
        $('#repliedUser').text(name);
        $('#replyOnThis').text(body);
        $('.reply').show();
    }
</script>
@endsection