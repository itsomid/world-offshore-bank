<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar default-sidebar">

        <!-- Search -->
{{--        <div class="sidebar-widget search-box">--}}
{{--            <form method="post" action="contact.html">--}}
{{--                <div class="form-group">--}}
{{--                    <input type="search" name="search-field" value=""--}}
{{--                           placeholder="Enter Your Keyword..." required>--}}
{{--                    <button type="submit"><span class="icon fa fa-search"></span></button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}

        <!--Blog Category Widget-->
    {{--<div class="sidebar-widget sidebar-blog-category">--}}
    {{--<div class="sidebar-title-two">--}}
    {{--<h4>Categories</h4>--}}
    {{--</div>--}}
    {{--<ul class="blog-cat-two">--}}
    {{--<li><a href="#">Consulting <span>(3)</span></a></li>--}}
    {{--<li><a href="#">Technology <span>(4)</span></a></li>--}}
    {{--<li><a href="#">Life style <span>(8)</span></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}

    <!-- Popular Post Widget-->
        <div class="sidebar-widget popular-posts">
            <div class="sidebar-title-two">
                <h4>Most popular Bank</h4>
            </div>

            <article class="post">
                <figure class="post-thumb"><img src="/images/banks/visabank-logo.png" alt=""><a
                            href="blog-single.html" class="overlay-box"><span
                                class="icon fa fa-link"></span></a></figure>
                <div class="text"><a href="{{route('bank/show',['slug'=>'visa-bank'])}}">VISA BANK</a>
                </div>
                <div class="post-info">Aug 25, 2016</div>
            </article>

            <article class="post">
                <figure class="post-thumb"><img src="/images/banks/bnp.png" alt=""><a
                            href="blog-single.html" class="overlay-box"><span
                                class="icon fa fa-link"></span></a></figure>
                <div class="text"><a href="{{route('bank/show',['slug'=>'visa-bank'])}}">BNP PARIBAS BANK</a></div>
                <div class="post-info">July 26, 2015</div>
            </article>

            <article class="post">
                <figure class="post-thumb"><img src="/images/banks/mjcbank-main.png" alt=""><a
                            href="blog-single.html" class="overlay-box"><span
                                class="icon fa fa-link"></span></a></figure>
                <div class="text"><a href="{{route('bank/show',['slug'=>'visa-bank'])}}">MJC BANK</a>
                </div>
                <div class="post-info">July 10, 2015</div>
            </article>

        </div>

        <!-- Tags Widget-->
        <div class="sidebar-widget popular-tags">
            <div class="sidebar-title-two">
                <h4>Tags</h4>
            </div>
            <a href="#">Bank</a>
            <a href="#">Offshore Bank</a>
            <a href="#">Finance</a>
            <a href="#">Business</a>
        </div>

        <!-- Banner Widget-->
        <div class="sidebar-widget banner-widget">
            <div class="widget-content" style="background-image:url(/images/resource/service-15.jpg)">
                <div class="logo">
                    <img src="/images/logo/map-marker.png" alt=""/>
                </div>
                <div class="title">Securied Business with</div>
                <h2 class="title-sidebar">World Offshore Bank</h2>
                <a href="contact.html" class="theme-btn btn-style-seventen">Let’s start now <span
                            class="icon flaticon-link"></span></a>
            </div>
        </div>

    </aside>
</div>
