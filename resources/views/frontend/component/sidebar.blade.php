<div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <!--     <div class="preloader text-center">
        <div class="circle"></div>
    </div> -->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="{{ route('home') }}"><img class="logo" src="{{ asset('frontend/assets').$setting->logo }}" alt=""></a>
                    </div>
                    <div class="col-md-9 col-xs-6 text-right header-top-right ">
                        <ul class="list-inline nav-topbar d-none d-md-inline">
                            <li class="list-inline-item menu-item-has-children"><a href="#">Layouts</a>
                                <ul class="sub-menu font-small">
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu font-small">
                                            <li><a href="page-about.html">About</a></li>
                                            <li><a href="page-contact.html">Contact</a></li>
                                            <li><a href="page-typography.html">Typography</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-search.html">Search</a></li>
                                            <li><a href="page-author.html">Author</a></li>
                                            <li><a href="page-404.html">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Category</a>
                                        <ul class="sub-menu font-small">
                                            <li><a href="category-list.html">List layout</a></li>
                                            <li><a href="category-grid.html">Grid layout</a></li>
                                            <li><a href="category-masonry.html">Masonry layout</a></li>
                                            <li><a href="category-big.html">Big layout</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Single post</a>
                                        <ul class="sub-menu font-small">
                                            <li><a href="single.html">Default</a></li>
                                            <li><a href="single-2.html">Big image</a></li>
                                            <li><a href="single-3.html">Left image</a></li>
                                            <li><a href="single-4.html">With sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><a href="https://demos.alithemes.com/html/stories/docs/"><i class="elegant-icon icon_document_alt mr-5"></i>Document</a></li>
                        </ul>
                        <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                        <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i class="elegant-icon icon_search mr-5"></i>Search</span></button>
                        @auth
                        <a class="btn btn-radius bg-primary text-white ml-15 font-small box-shadow" href="{{ route('dashboard') }}">Dashboard</a>
                        @endauth
                        @guest
                        <a class="btn btn-radius bg-primary text-white ml-15 font-small box-shadow" href="{{ route('login') }}">Login</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li><a href="{{ route('home') }}"> <i class="elegant-icon icon_house_alt mr-5"></i> Home</a></li>
                            @include('frontend.component.category-tree')
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu text-muted font-small">
                                    <li><a href="index.html">Home default</a></li>
                                    <li><a href="home-2.html">Homepage 2</a></li>
                                    <li><a href="home-3.html">Homepage 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="page-about.html">About</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-typography.html">Typography</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-search.html">Search</a></li>
                                    <li><a href="page-author.html">Author</a></li>
                                    <li><a href="page-404.html">404 page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Category</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="category-list.html">List layout</a></li>
                                    <li><a href="category-grid.html">Grid layout</a></li>
                                    <li><a href="category-masonry.html">Masonry layout</a></li>
                                    <li><a href="category-big.html">Big layout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Single post</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="single.html">Default</a></li>
                                    <li><a href="single-2.html">Big image</a></li>
                                    <li><a href="single-3.html">Left image</a></li>
                                    <li><a href="single-4.html">With sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="search-text-bg">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search stories, places and people">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="elegant-icon icon_search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-80 text-center">
                    <div class="col-12 font-small suggested-area">
                        <h5 class="suggested font-heading mb-20 text-muted"> <strong>Suggested keywords:</strong></h5>
                        <ul class="list-inline d-inline-block">
                            <li class="list-inline-item"><a href="category.html">World</a></li>
                            <li class="list-inline-item"><a href="category.html">American</a></li>
                            <li class="list-inline-item"><a href="category.html">Opinion</a></li>
                            <li class="list-inline-item"><a href="category.html">Tech</a></li>
                            <li class="list-inline-item"><a href="category.html">Science</a></li>
                            <li class="list-inline-item"><a href="category.html">Books</a></li>
                            <li class="list-inline-item"><a href="category.html">Travel</a></li>
                            <li class="list-inline-item"><a href="category.html">Business</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-80">
                    <div class="col-lg-4">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="{{ asset('frontend/assets') }}/imgs/news/thumb-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Travel Tips</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="{{ asset('frontend/assets') }}/imgs/news/thumb-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Lifestyle</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="{{ asset('frontend/assets') }}/imgs/news/thumb-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Hotel Review</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>