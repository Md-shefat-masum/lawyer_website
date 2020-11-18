@extends('layouts.website.website')
@section('content')



    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs innerbg5">
        <div class="container">
            <div class="breadcrumbs-inner text-center">
                <h1 class="breadcrumbs-title white-color">About Us</h1>
                <ul class="breadcrumbs-meta">
                    <li><a href="/">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 pt-120 pb-120 md-pt-80 md-pb-78">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-5 md-mb-30">
                    <div class="about_image_left">
                        <img src="{{asset(''.App\DescriptiveAbout::first()->image)}}" alt="">
                        <div class="caption" style="text-align: center;">
                            <p>Yes we hear you !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl-45 md-pl-15">
                    <div class="sec-title mb-24">
                        <div class="sub-title primary">About Us</div>
                    </div>
                    {!! App\DescriptiveAbout::first()->description !!}
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

@endsection
