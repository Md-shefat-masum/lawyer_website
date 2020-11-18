@extends('layouts.website.website')
@section('content')



    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs innerbg10">
        <div class="container">
            <div class="breadcrumbs-inner text-center">
                <h1 class="breadcrumbs-title white-color">Our Team</h1>
                <ul class="breadcrumbs-meta">
                    <li><a href="/">Home</a></li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Faq Section Start -->
    <div class="rs-faq inner pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-end">

                    <div class="contact-part">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <h3 class="">For Consultation
                                </h3>
                            </div>
                            <div class="col-lg-6 col-md-6">
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
                <div class="col-lg-12 md-mb-20">
                    <div class="white-bg mb-60">
                        <div class="content-wrap">

                            {!! App\OurPrivilege::first()->description !!}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Faq Section End-->

    <style>
        .content-wrap img{
            margin: 10px 0px !important;
        }
        .content-wrap p, .content-wrap span{
            font-size: 16px!important;
            line-height: 24px!important;
            margin: 0!important;
            padding: 0!important;
        }
        .content-wrap h4{
            font-size: 24px!important;
            line-height: 24px!important;
            margin: 0!important;
        }
        .content-wrap h4 span{
            margin: 0!important;
            font-size: 24px!important;
            line-height: 24px!important;
        }
        .content-wrap p a{
            display: inline-block;
            border: 1px solid #38b64a !important;
            padding: 5px 28px;
        }
        .MsoNormal b span{
            display: block!important;
            text-align: left
        }

    </style>

    @push('cjs')

        <script>
            $(window).on('load',function(){
                setTimeout(() => {
                    console.log('lg');
                    $('.content-wrap img').css('width','100%');
                    $('.content-wrap b').parents('.MsoNormal').css('width','100%');
                    $('.content-wrap b').parents('.MsoNormal').css('display','30%');
                    $('.content-wrap img').parents('.MsoNormal').css('width','30%');
                    $('.content-wrap img').parents('.MsoNormal').css('float','left');
                }, 300);

            })
        </script>
    @endpush


@endsection
