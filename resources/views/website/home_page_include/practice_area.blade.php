<!-- Our Practice Areas Start -->
<div class="rs-our-practice style1 title-bg pt-114 pb-120 md-pt-72 md-pb-80">
    <div class="container">
        <div class="sec-title top-line text-center mb-49 xs-mb-31">
            <div class="sub-title primary">What We Do</div>
            <h2 class="title white-color mb-0">Areas of Practice</h2>
        </div>
        <div class="row">
            @foreach (App\AreaOfPractice::where('status',1)->orderBy('serial','ASC')->get() as $item)
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="practice-inner">
                        <div class="icon-part">
                            <img src="{{asset(''.$item->icon)}}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">
                                <a href="/service/{{$item->id}}/{{str_replace(' ','-',strtolower($item->title))}}">{{ $item->title }}</a></h4>
                            <div class=" desc ">
                                <a href="/service/{{$item->id}}/{{str_replace(' ','-',strtolower($item->title))}})" class="readon2 readon-two2 ">learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <!-- <div class="btn-area text-center pt-30 ">
            <a href="# " class="readon ">View All Practice Areas</a>
        </div> -->
    </div>
</div>
<!-- Our Practice Areas END -->
