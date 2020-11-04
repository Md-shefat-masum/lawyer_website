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
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="content-part">
                                <div class="slider-des">

                                    <h4 class="white-color" style="padding-top: 150px">{{ $item->heading_1 }}</h4>
                                    <h2 class="white-color">
                                        {{ $item->heading_2 }}
                                    </h2>
                                    <div class="sl-desc margin-0">

                                    </div>
                                </div>
                                <div class="slider-bottom">
                                    <ul>
                                        <li><a href="/contact" class="readon">Free Consultation</a></li>
                                        <!-- <li><a href="practice-areas.html" class="readon">Areas of Practice</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 hidden-md">
                            <div class="sl-ly-img">
                                <img src="{{asset('contents/website')}}/images/slider/ly1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<!-- Slider End -->
