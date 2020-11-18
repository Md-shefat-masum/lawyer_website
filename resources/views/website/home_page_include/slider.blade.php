<!-- Slider Start -->
<div id="rs-slider" class="rs-slider slider1">
    <div class="bend niceties">
        <div id="nivoSlider" class="slides">
            @php $i = 1; @endphp
            @foreach (App\Banner::where('status',1)->latest()->get()->take(5) as $item)
                <img src="{{asset(''.$item->banner_image)}}" alt="banner" title="#slide-{{$i++}}" />
            @endforeach
        </div>
        <!-- Slide 1 -->
        @php $i=1; @endphp
        @foreach (App\Banner::where('status',1)->latest()->get()->take(5) as $item)
            <div id="slide-{{$i++}}" class="slider-direction">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-7">
                            <div class="content-part" style="background-color: transparent; margin-top: 17%;">
                                <div class="slider-des" style="text-align: center;">

                                    <h4 class="black-color" style="font-family: Anton !important;">{{ $item->heading_1 }}</h4>
                                    <h2 class="black-color" style="font-family: Anton !important;">
                                        {{ $item->heading_2 }}
                                    </h2>

                                </div>

                            </div>
                        </div>
                        {{-- <div class="col-lg-6 hidden-md">
                            <div class="sl-ly-img">
                                <img src="{{asset('contents/website')}}/images/slider/ly1.png" alt="">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<!-- Slider End -->
