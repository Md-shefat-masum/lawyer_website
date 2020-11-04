<!-- About Section Start -->
<div id="rs-about" class="rs-about style1 pt-120 pb-120 md-pt-80 md-pb-78">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-5 md-mb-30">
                <img src="{{asset(''.App\ShortAbout::first()->image)}}" alt="">
            </div>
            <div class="col-lg-7 pl-45 md-pl-15">
                <div class="sec-title mb-24">
                    <div class="sub-title primary">About Us</div>
                </div>
                {!! App\ShortAbout::first()->description !!}
                <div class="btn-area pt-30">
                    <a href="/contact" class="readon">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->
