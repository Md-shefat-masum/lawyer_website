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
                {{-- <div class="col-sm-0 col-lg-6 col-md-0"></div>
                <div class="col-lg-6">
                    <div class="contact-part">
                        <div class="row">
                            <div class="col-lg-8 col-md-4">
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
                </div> --}}

                @php 
                    $services = App\AreaOfPractice::orderBy('serial','ASC')->where('status',1)->get();
                @endphp
                @foreach ($services as $item)
                    <div class="col-lg-6 md-mb-20">
                        <div class="white-bg mb-60">
                            <div class="content-wrap">

                                {{-- {!! App\ServiceDetais::first()->description !!} --}}
                                
                                    <h3>{{ $item->title }}</h3>
                                    {!! $item->description !!}
                                    <br>
                                    <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if ($item->image)
                            <img src="/{{ $item->image }}" alt="image" class="img-fluid">
                        @else
                        @endif
                        <br>
                        <br>
                    </div>
                @endforeach

                
            </div>
        </div>
    </div>
    <!--Faq Section End-->

@endsection
