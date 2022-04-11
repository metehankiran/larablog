@if (!empty($setting))
<div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
    <a href="{{ route('author',$setting->user) }}"><img class="about-author-img mb-25" src="{{ Storage::url($setting->user->image) }}" alt="{{ $setting->user->name }}"></a>
    <h5 class="mb-20"><a href="{{ route('author',$setting->user) }}">{{ $setting->user->name }}</a></h5>
    <p class="font-medium text-muted">{{ $setting->user->about }}</p>
    <strong>Follow me: </strong>
    <ul class="header-social-network d-inline-block list-inline color-white mb-20">
        <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
        <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
        <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
    </ul>
</div>
@endif