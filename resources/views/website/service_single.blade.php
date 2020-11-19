@extends('layouts.website.website')
@section('content')



    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs innerbg10">
        <div class="container">
            <div class="breadcrumbs-inner text-center">
                <h1 class="breadcrumbs-title white-color">Service</h1>
                <ul class="breadcrumbs-meta">
                    <li><a href="/">Home</a></li>
                    <li>Service</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Faq Section Start -->
    <div class="rs-faq inner pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 md-mb-20">
                    <div class="white-bg mb-60">
                        <div class="content-wrap">
                            <h3 class="fs-30">{{ $service->title }}</h3>
                            <p class="desc">
                                {!! $service->description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/{!!  $service->image !!}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="contact-part">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="">For Consultation
                                </h3>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="btn-area">
                                    <a href="/contact" class="readon">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4">
                            <p>
                                We are here to answer your questions, map out a plan and solve problems.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--Faq Section End-->

@endsection
