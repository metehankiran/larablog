<footer class="pt-50 pb-20 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="sidebar-widget wow fadeInUp animated mb-30">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">About me</h5>
                    </div>
                    <div class="textwidget">
                        <p>
                            {{ $setting->meta_desc }}
                        </p>
                        <p><strong class="color-black">Address</strong><br>
                            {{ $setting->address }}
                        </p>
                        <p><strong class="color-black">Follow me</strong><br>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Quick link</h5>
                    </div>
                    <ul class="font-small">
                        <li class="cat-item cat-item-2"><a href="#">About me</a></li>
                        <li class="cat-item cat-item-4"><a href="#">Help & Support</a></li>
                        <li class="cat-item cat-item-5"><a href="#">??????Licensing Policy</a></li>
                        <li class="cat-item cat-item-6"><a href="#">Refund Policy</a></li>
                        <li class="cat-item cat-item-7"><a href="#">Hire me</a></li>
                        <li class="cat-item cat-item-7"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Tagcloud</h5>
                    </div>
                    <div class="tagcloud mt-50">
                        @foreach ($setting->tags() as $tag)
                        <a class="tag-cloud-link" href="category.html">{{ $tag }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            @if ($setting->newsletter)
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Newsletter</h5>
                    </div>
                    <div class="newsletter">
                        <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                        <form class="input-group form-subcriber mt-30 d-flex">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                            <label class="mt-20"> <input class="mr-5" name="name" type="checkbox" value="1" required=""> I agree to the <a href="#" target="_blank">terms &amp; conditions</a> </label>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
            <p class="float-md-left font-small text-muted">?? {{ now()->year }}, {{ env('APP_NAME') }} </p>
            <p class="float-md-right font-small text-muted">
               Developed by <a href="https://www.github.com/metehankiran" target="_blank">Metehan KIRAN</a>
            </p>
        </div>
    </div>
</footer>