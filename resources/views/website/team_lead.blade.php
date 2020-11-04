@extends('layouts.website.website')
@section('content')



    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs innerbg5">
        <div class="container">
            <div class="breadcrumbs-inner text-center">
                <h1 class="breadcrumbs-title white-color">NUSRAT JAHAN</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Team Single Section Start -->
    <div class="rs-team team-sigle pt-120 md-pt-80">
        <div class="container pb-120 md-pb-80">
            <div class="row align-items-start">
                <div class="col-lg-5 col-md-12 md-mb-30">
                    <img src="{{ asset(''.App\TeamLead::first()->image) }}" alt="">
                    <!-- <div class="assistant">
                        <div class="row">

                            <div class="col-lg-3">
                                <img src="images/team/1.2.jpg" alt="">
                            </div>
                            <div class="col-lg-6">
                                <h4>Assistant: Kim 905-274-2110 ext. 221 kim@woodgold.ca
                                </h4>
                            </div>
                            <div class="col-lg-3">

                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-7 col-md-12 pl-35 mt--10 md-pl-15">
                    <div class="detail-part">
                        <div class="title-part mb-45 md-mb-25">
                            <h3 class="title">{{ $basic_information->full_name }}</h3>
                        </div>
                        <ul class="contact-list mb-15">
                            <li><i class="glyph-icon flaticon-email"></i><a href="mailto:{{ $basic_information->email_1 }}">{{ $basic_information->email_1 }}</a></li>
                            <li><i class="flaticon-call"></i><a href="tel:{{ $basic_information->mobile_no_1 }}">{{ $basic_information->mobile_no_1 }}</a></li>
                        </ul>
                        <ul class="social-links mb-37">
                            <li><a href="{{ $basic_information->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $basic_information->twitter }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $basic_information->skype }}"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="{{ $basic_information->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                        {!! App\TeamLead::first()->description !!}

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Team Single Section End -->

    @endsection
