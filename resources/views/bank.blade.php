@extends('layouts.main')
@section('title')
   {{$bank->name}}
@endsection
@section('content')

    <section class="page-title" style="background-image:url(/images/background/8.jpg)">
        <div class="auto-container">
            <div class="content">
                <h1>{{$bank->name}}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('banks/list')}}">Banks Directory</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{$bank->img_1}}" alt="{{$bank->name}}"/>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="fa fa-calendar"></span>{{$bank->created_at->format('M d Y')}}</li>
                                    {{--<li><span class="fa fa-user"></span>By Admin</li>--}}
                                    {{--<li><span class="fa fa-list"></span>Uncategorized</li>--}}
{{--                                    <li><span class="fa fa-comment"></span>(2) Comment</li>--}}
                                </ul>
                                <h4>{{$bank->name}}</h4>
                                <div class="text">
                                   {!!$bank->description!!}
                                    @if($bank->blockquote)
                                    <blockquote>
                                        <div class="quote-icon flaticon-left-quote"></div>
                                        <div class="quote-text">{{$bank->blockquote}}</div>
                                    </blockquote>
                                    @endif

                                    @if($bank->img_2)
                                    <div class="news-gallery">
                                        <div class="row clearfix">

                                            <div class="column col-lg-12 col-md-12 col-sm-12">
                                                <div class="image">
                                                    <img src="{{$bank->img_2}}" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <h5>{{$bank->name}} QUICK VIEW</h5>
                                    <div class="row clearfix">
                                        <div class="price-block style-two col-lg-6 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="lower-box">
                                                    <ul class="price-list">
                                                        <li>Trading Name: {{$bank->name}}</li>
                                                        <li>Registered: {{$bank->registered_name}}</li>
                                                        <li>Type: {{$bank->type}} Bank</li>
                                                        <li>Industry: BANKING & FINANCIAL SERVICES</li>
                                                        <li>Founded: {{isset($bank->founded)? $bank->founded->format('Y-m-d'): ''}}</li>
                                                        <li>Headquarters: {{$bank->headquarter}}</li>
                                                        <li>Swift Info: <a
                                                                href="https://www2.swift.com/bsl/?bicSearch_bic={{$bank->bic}}"
                                                                target="_blank" rel="noopener">{{$bank->bic}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block style-two col-lg-6 col-md-6 col-sm-12">
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <div class="inner-box  mb-md-4">
                                                        <div class="lower-box">
                                                            <ul class="price-list">
                                                                <li>Website: <a href="https://www.visabank.co/" target="_blank">{{$bank->website}}</a>
                                                                </li>
                                                                <li><strong>Client presence: {{$bank->presence?'Needed':'No Needed'}}</strong></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="lower-box">
                                                            <ul class="price-list">
                                                                <li>Total Income: {{$bank->total_income}} Billion {{$bank->currency}} ({{\Carbon\Carbon::now()->year}})</li>
                                                                <li>Total Assets: {{$bank->total_assets}} Billion {{$bank->currency}} ({{\Carbon\Carbon::now()->year}})</li>
                                                                <li>Number of Employee: {{$bank->employee}} ({{\Carbon\Carbon::now()->year}})</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--post-share-options-->
                        <div class="post-share-options">
                            <div class="post-share-inner clearfix">
                                <div class="pull-left post-tags"><span>Tags: </span><a href="#">{{$bank->name}}</a> <a
                                        href="#">Life</a> <a href="#">Applin</a> <a href="#">Techniq</a></div>
                                <ul class="pull-right social-links clearfix">
                                    <li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
                                    <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                    <li class="google-plus"><a href="#" class="fa fa-google-plus"></a></li>
                                    <li class="dribble"><a href="#" class="fa fa-dribbble"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- New Posts -->
                        <div class="new-posts">
                            <div class="clearfix">
                                <a class="prev-post pull-left" href="#"><span class="fa fa-angle-double-left"></span>
                                    Previous Post</a>
                                <a class="next-post pull-right" href="#">Next Post <span
                                        class="fa fa-angle-double-right"></span></a>
                            </div>
                        </div>

                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title">
                                <h6>Comments</h6>
                            </div>
                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="/images/resource/author-8.jpg" alt=""></div>
                                    <div class="comment-inner clearfix">
                                        <div class="comment-info clearfix"><strong>Riva Collins</strong>
                                            <div class="comment-time"> November 19, 2019 at 11:00 am</div>
                                        </div>
                                        <div class="text">Banking is all about relationships. Our business greatly values the relationship we have with VISA Bank. They are our neighbor, they know us by name, and every day, year after year I know I can count on them.
                                        </div>
                                        <a class="comment-reply" href="#">Reply <span class="fa fa-angle-right"></span></a>
                                    </div>
                                </div>
                            </div>

                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="/images/resource/author-5.jpg" alt=""></div>
                                    <div class="comment-inner clearfix">
                                        <div class="comment-info clearfix"><strong>Obila Doe</strong>
                                            <div class="comment-time"> November 22, 2019 at 10:00 pm</div>
                                        </div>
                                        <div class="text">It is so nice to come in this bank and see the same, familiar faces behind the teller line. It’s not like some banks where the faces change every time I go in.
                                        </div>
                                        <a class="comment-reply" href="#">Reply <span class="fa fa-angle-right"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--End Comments Area-->

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="group-title">
                                <h6>Post A Comment</h6>
                                <div class="group-text">Your email address will not be published *</div>
                            </div>
                            <!--Comment Form-->
                            <form method="post" action="blog.html">
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="your comment"></textarea>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                                        <input type="text" name="username" placeholder="name*" required>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                                        <input type="email" name="email" placeholder="email*" required>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                                        <input type="text" name="text" placeholder="website*" required>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                        <button class="theme-btn submit-btn" type="submit" name="submit-form">Post
                                            Comment
                                        </button>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!--End Comment Form -->

                    </div>
                </div>

                <!--Sidebar Side-->
                @include('layouts.sidebar')

            </div>
        </div>
    </div>
    <!--End Sidebar Page Container-->

    <!-- Call To Action Two -->
    <section class="call-to-action-two">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left">
                    <h2>Request for <span>Submit Bank</span></h2>
                </div>
                <div class="pull-right">
                    <a href="contact.html" class="theme-btn btn-style-five">Request now <span
                            class="icon fa fa-arrow-right"></span></a>
                </div>

            </div>
        </div>
    </section>
@endsection
