@extends('layouts.main')
@section('title')
    Banks List
@endsection
@section('content')

    <section class="page-title" style="background-image:url(images/background/8.jpg)">
        <div class="auto-container">
            <div class="content">
                <h1>Banks <span>Directory</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('banks/list')}}">Banks Directory</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <section class="blog-list-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Banks list</div>
                <h2>The Ultimate World <br><span class="brown_color">Bank</span> Directory</h2>
            </div>
            <div class="row clearfix">

                @foreach($banks as $bank)
                <div class="news-block-four brown col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{$bank->img_1}}"  alt="{{$bank->name}}" class="banks-img"/>
                            <div class="overlay-box">
                                <a href="{{$bank->img_1}}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="{{route('bank/show',['slug'=>$bank->slug])}}">{{$bank->name}}</a></h5>
                            <div class="">{{$bank->short_description}}</div>
                            <a href="{{route('bank/show',['slug'=>$bank->slug])}}" class="theme-btn btn-style-ten">View more</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!--Styled Pagination-->
{{--            <ul class="styled-pagination text-center">--}}
{{--                <li><a href="#" class="active">1</a></li>--}}
{{--                <li><a href="#">2</a></li>--}}
{{--                <li><a href="#">3</a></li>--}}
{{--                <li class="next"><a href="#"><span class="fa fa-angle-double-right"></span></a></li>--}}
{{--            </ul>--}}
            <!--End Styled Pagination-->
        </div>
    </section>
    <!--End Sidebar Page Container-->

    <!-- Call To Action Two -->
    <section class="call-to-action-two">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left">
                    <h2>Request for <span>quote</span></h2>
                </div>
                <div class="pull-right">
                    <a href="contact.html" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
                </div>

            </div>
        </div>
    </section>
    @endsection
