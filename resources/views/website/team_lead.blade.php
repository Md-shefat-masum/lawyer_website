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
                {{-- <div class="col-lg-5 col-md-12 md-mb-30">
                </div> --}}
                <div class="col-12">
                    <div class="detail-part">
                        <img src="{{ asset(''.App\TeamLead::first()->image) }}" style="width: 50%; margin: ;float: left;" alt="">
                        <div class="title-part mb-45 md-mb-25">
                            <h3 class="title">{{ $basic_information->full_name }}</h3>
                        </div>
                        <ul class="contact-list mb-15">
                            <li><i class="glyph-icon flaticon-email"></i><a href="mailto:{{ $basic_information->email_1 }}">{{ $basic_information->email_1 }}</a></li>
                            <li><i class="flaticon-call"></i><a href="tel:{{ $basic_information->mobile_no_1 }}">{{ $basic_information->mobile_no_1 }}</a></li>
                        </ul>
                        {!! App\TeamLead::first()->description !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Team Single Section End -->

    @endse