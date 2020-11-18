@extends('layouts.website.website')
@section('content')



    <!-- Main content Start -->
    <div class="main-content">

        @include('website.home_page_include.slider')



        @include('website.home_page_include.about')
        <!-- Services Start -->
        <div id="rs-services" class="rs-services style1 long-gap md-pt-80">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-12">
                        <div class="service-inner">
                            <div class="service-box">
                                <div class="service_image">
                                    <img src="/contents/website/a.JPG" style="width: 100%" alt="">
                                    <div class="caption">
                                        <p>No more legal worries.</p>
                                    </div>
                                </div>
                                {{-- <div class="image-part">
                                    <img src="{{asset('contents/website')}}/images/services/icons/1.png" alt="">
                                </div>
                                <div class="text">
                                    <h4 class="title"><a href="#">100% Success Rate</a></h4>
                                    <div class="desc">Creation timelines for the standard best service passage vary, with some citing the 15th century.</div>
                                </div> --}}
                            </div>
                            <div class="service-box dark-bg">
                                <div class="service_image">
                                    <img src="/contents/website/b.jpg" style="width: 100%" alt="">
                                    <div class="caption">
                                        <p>Timely response is important.</p>
                                    </div>
                                </div>
                                {{-- <div class="image-part">
                                    <img src="{{asset('contents/website')}}/images/services/icons/2.png" alt="">
                                </div>
                                <div class="text">
                                    <h4 class="title"><a href="#">Expert Legal Services</a></h4>
                                    <div class="desc">Creation timelines for the standard best service passage vary, with some citing the 15th century.</div>
                                </div> --}}
                            </div>
                            <div class="service-box">
                                <div class="service_image">
                                    <img src="/contents/website/c.jpg" style="width: 100%" alt="">
                                    <div class="caption">
                                        <p>Getting your life on the right path.</p>
                                    </div>
                                </div>
                                {{-- <div class="image-part">
                                    <img src="{{asset('contents/website')}}/images/services/icons/3.png" alt="">
                                </div>
                                <div class="text">
                                    <h4 class="title"><a href="#">Highly Recommend</a></h4>
                                    <div class="desc">Creation timelines for the standard best service passage vary, with some citing the 15th century.</div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <br>
        <br>
        
        @include('website.home_page_include.practice_area')


        <!-- Faq Section Start -->
        <div class="rs-faq style1 pt-120 pb-120 md-pt-72 md-pb-80 ">
            <div class="container padding-0 md-pr-15 md-pl-15 ">
                <div class="content-wrap title-bg ">
                    <div class="row md-col-padding ">
                        <div class="col-lg-6 pr-0 ">
                            <div class="faq-part ">
                                <div class="sec-title mb-45 xs-mb-31 ">
                                    <div class="sub-title primary ">Any Questions ?</div>
                                    <h2 class="title white-color mb-0 ">Frequently Asked Questions</h2>
                                </div>
                                <div id="accordion" class="accordion">

                                    @foreach (App\FAQ::get() as $key => $item)
                                        <div class="card">
                                            <div class="card-header ">
                                                <a class="card-link " data-toggle="collapse" href="#collapseOne{{$item->id}}">
                                                    Q. {{ $key+1 }} : {{ $item->question }}
                                                </a>
                                            </div>
                                            <div id="collapseOne{{$item->id}}" class="collapse {{$key==0?'show':''}}" data-parent="#accordion">
                                                <div class="card-body ">
                                                    {{ $item->answer }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pl-0 ">
                            @include('website.home_page_include.free_consultation')
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Faq Section End -->

        <!-- Testimonia Section Start -->
        {{-- <div class="rs-testimonia bg1 pt-120 pb-274 md-pt-84 md-pb-80 " style="padding-bottom: 90px;">
            <div class="sec-title top-line text-center mb-51 xs-mb-31 ">
                <div class="sub-title primary ">What Clients Say</div>
            </div>
            <div class="container ">
                <div class="testimonials-inner ">
                    <div class="slider-for">
                        @foreach (App\Review::where('status',1)->get() as $item)
                            <div class="item ">
                                <p class="desc ">
                                    “ {{ $item->description }} ”
                                </p>
                                <ul class="ratings ">
                                    <li><i class="fa fa-star "></i></li>
                                    <li><i class="fa fa-star "></i></li>
                                    <li><i class="fa fa-star "></i></li>
                                    <li><i class="fa fa-star "></i></li>
                                    <li><i class="fa fa-star-half-o "></i></li>
                                </ul>
                                <div class="author-info ">
                                    <h4 class="name ">— {{ $item->name }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testimonia Section End -->
    </div>

@endsection
