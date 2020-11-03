@extends('layouts.website.website')
@section('content')



    <!-- Main content Start -->
    <div class="main-content">
        <!-- Slider Start -->
        <div id="rs-slider" class="rs-slider slider1">
            <div class="bend niceties">
                <div id="nivoSlider" class="slides">
                    <img src="{{asset('contents/website')}}/images/slider/h1-sl1.jpg" alt="" title="#slide-1" />
                    <img src="{{asset('contents/website')}}/images/slider/h1-sl2.jpg" alt="" title="#slide-2" />
                </div>
                <!-- Slide 1 -->
                <div id="slide-1" class="slider-direction">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-part">
                                    <div class="slider-des">

                                        <h4 class="white-color">Your solutions start here……..</h4>
                                        <h2 class="white-color">
                                            N Jahan Legal Professional Corporation

                                        </h2>
                                        <div class="sl-desc margin-0">

                                        </div>
                                    </div>
                                    <div class="slider-bottom">
                                        <ul>
                                            <li><a href="contact.html" class="readon">Free Consultation</a></li>
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

            </div>
        </div>
        <!-- Slider End -->

        <!-- Services Start -->
        <div id="rs-services" class="rs-services style1 long-gap md-pt-80">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-12">
                        <div class="service-inner">
                            <div class="service-box">
                                <div class="image-part">
                                    <img src="{{asset('contents/website')}}/images/services/icons/1.png" alt="">
                                </div>
                                <div class="text">
                                    <h4 class="title"><a href="#">100% Success Rate</a></h4>
                                    <div class="desc">Creation timelines for the standard best service passage vary, with some citing the 15th century.</div>
                                </div>
                            </div>
                            <div class="service-box dark-bg">
                                <div class="image-part">
                                    <img src="{{asset('contents/website')}}/images/services/icons/2.png" alt="">
                                </div>
                                <div class="text">
                                    <h4 class="title"><a href="#">Expert Legal Services</a></h4>
                                    <div class="desc">Creation timelines for the standard best service passage vary, with some citing the 15th century.</div>
                                </div>
                            </div>
                            <div class="service-box">
                                <div class="image-part">
                                    <img src="{{asset('contents/website')}}/images/services/icons/3.png" alt="">
                                </div>
                                <div class="text">
                                    <h4 class="title"><a href="#">Highly Recommend</a></h4>
                                    <div class="desc">Creation timelines for the standard best service passage vary, with some citing the 15th century.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style1 pt-120 pb-120 md-pt-80 md-pb-78">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-5 md-mb-30">
                        <img src="{{asset('contents/website')}}/images/about/home-about-1.jpg" alt="">
                    </div>
                    <div class="col-lg-7 pl-45 md-pl-15">
                        <div class="sec-title mb-24">
                            <div class="sub-title primary">About Us</div>
                            <h2 class="title mb-0">Welcome to N Jahan Legal Professional Corporation</h2>
                        </div>
                        <p class="des mb-36">At N Jahan Legal Professional Corporation, we take the time to understand your concerns and find the best possible path going forward. Our clients and colleagues have acknowledged our sterling work and unblemished work ethics in
                            the areas of Immigration and Refugee Laws, Family, Real Estate, Wills and Estate. The associates of the firm are well equipped to further enrich and enhance the law practice in Ontario at the same time provide valuable legal
                            services to clients over legal matters in Bangladesh. </p>
                        <p class="des">We are a law firm that plays a vital role in helping our clients to prepare for complex legal situations with apt solutions. With an ability to comprehend law with its solution based approach, the firm is a preferred partner for
                            legal assistance to numerous private clients, Banks and Financial Institutions.
                        </p>
                        <div class="btn-area pt-30">
                            <a href="contact.html" class="readon">Contact Us</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Our Practice Areas Start -->
        <div class="rs-our-practice style1 title-bg pt-114 pb-120 md-pt-72 md-pb-80">
            <div class="container">
                <div class="sec-title top-line text-center mb-49 xs-mb-31">
                    <div class="sub-title primary">What We Do</div>
                    <h2 class="title white-color mb-0">Areas of Practice</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="practice-inner">
                            <div class="icon-part">
                                <img src="{{asset('contents/website')}}/images/practice/icons/4.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                    <a href="service.html">Family Law</a></h4>
                                <div class=" desc ">
                                    <a href="service.html" class="readon2 readon-two2 ">learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 ">
                        <div class="practice-inner ">
                            <div class="icon-part ">
                                <img src="{{asset('contents/website')}}/images/practice/icons/6.png " alt=" ">
                            </div>
                            <div class="content-part ">
                                <h4 class="title "><a href="service.html">IMMIGRATION</a></h4>
                                <div class="desc ">
                                    <a href="service.html" class="readon2 readon-two2 ">learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 ">
                        <div class="practice-inner ">
                            <div class="icon-part ">
                                <img src="{{asset('contents/website')}}/images/practice/icons/3.png " alt=" ">
                            </div>
                            <div class="content-part ">
                                <h4 class="title "><a href="service.html">WILLS AND ESTATE</a></h4>
                                <div class="desc ">
                                    <a href="service.html" class="readon2 readon-two2 ">learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 ">
                        <div class="practice-inner ">
                            <div class="icon-part ">
                                <img src="{{asset('contents/website')}}/images/practice/icons/1.png " alt=" ">
                            </div>
                            <div class="content-part ">
                                <h4 class="title "><a href="service.html">POWER OF ATTORNEY</a></h4>
                                <div class="desc ">
                                    <a href="service.html" class="readon2 readon-two2 ">learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 ">
                        <div class="practice-inner ">
                            <div class="icon-part ">
                                <img src="{{asset('contents/website')}}/images/practice/icons/2.png " alt=" ">
                            </div>
                            <div class="content-part ">
                                <h4 class="title "><a href="service.html">REAL ESTATE</a></h4>
                                <div class="desc ">
                                    <a href="service.html" class="readon2 readon-two2 ">learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 ">
                        <div class="practice-inner ">
                            <div class="icon-part " style="height: 118px;">
                                <img src="{{asset('contents/website')}}/images/practice/icons/5.png " alt=" ">
                            </div>
                            <div class="content-part ">
                                <h4 class="title "><a href="service.html">NOTARIZATION</a></h4>
                                <div class="desc ">
                                    <a href="service.html" class="readon2 readon-two2 ">learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="btn-area text-center pt-30 ">
                    <a href="# " class="readon ">View All Practice Areas</a>
                </div> -->
            </div>
        </div>
        <!-- Our Practice Areas END -->


        <!-- Faq Section Start -->
        <div class="rs-faq style1 pt-120 pb-120 md-pt-72 md-pb-80 ">
            <div class="container padding-0 md-pr-15 md-pl-15 ">
                <div class="content-wrap title-bg ">
                    <div class="row md-col-padding ">
                        <div class="col-lg-6 pr-0 ">
                            <div class="faq-part ">
                                <div class="sec-title mb-45 xs-mb-31 ">
                                    <div class="sub-title primary ">Any Questions ?</div>
                                    <h2 class="title white-color mb-0 ">Frequently Asked Questions</h2>
                                </div>
                                <div id="accordion " class="accordion ">
                                    <div class="card ">
                                        <div class="card-header ">
                                            <a class="card-link " data-toggle="collapse " href="#collapseOne ">Q. 1 :
                                                Why
                                                should I trust your firm for my case?</a>
                                        </div>
                                        <div id="collapseOne " class="collapse show " data-parent="#accordion ">
                                            <div class="card-body ">“We cannot solve our problems with the same level of thinking that created them.”</div>
                                        </div>
                                    </div>
                                    <div class="card ">
                                        <div class="card-header ">
                                            <a class="collapsed card-link " data-toggle="collapse " href="#collapseTwo ">Q.
                                                2 : What types of cases does your law firm handle?</a>
                                        </div>
                                        <div id="collapseTwo " class="collapse " data-parent="#accordion ">
                                            <div class="card-body ">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</div>
                                        </div>
                                    </div>
                                    <div class="card ">
                                        <div class="card-header ">
                                            <a class="collapsed card-link " data-toggle="collapse " href="#collapseThree ">Q. 3 : What are your opening hours?</a>
                                        </div>
                                        <div id="collapseThree " class="collapse " data-parent="#accordion ">
                                            <div class="card-body ">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</div>
                                        </div>
                                    </div>
                                    <div class="card ">
                                        <div class="card-header ">
                                            <a class="collapsed card-link " data-toggle="collapse " href="#collapseFour ">Q. 4 : Do you charge for consultations?</a>
                                        </div>
                                        <div id="collapseFour " class="collapse " data-parent="#accordion ">
                                            <div class="card-body ">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pl-0 ">
                            @include('website.home_page_include.free_consultation')
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Faq Section End -->

        <!-- Testimonia Section Start -->
        <div class="rs-testimonia bg1 pt-120 pb-274 md-pt-84 md-pb-80 ">
            <div class="sec-title top-line text-center mb-51 xs-mb-31 ">
                <div class="sub-title primary ">What Clients Say</div>
            </div>
            <div class="container ">
                <div class="testimonials-inner ">
                    <div class="slider-for ">
                        <div class="item ">
                            <p class="desc ">“Sometimes when I’m enjoying time with my children, my lawyer crosses my mind and I feel so indebted. I owe so much of my peace of mind to the hard work of the lawyers at Wood Gold.
                                <br> Before I met my lawyers at Wood Gold I felt nothing except fear and stress. It was the efficiency in solving my problems, the patience in making sure I understood everything that was happening and the genuine care
                                that I felt from them in regards to my dilemma that helped me get past what felt like a mountain of struggle.”
                            </p>
                            <ul class="ratings ">
                                <li><i class="fa fa-star "></i></li>
                                <li><i class="fa fa-star "></i></li>
                                <li><i class="fa fa-star "></i></li>
                                <li><i class="fa fa-star "></i></li>
                                <li><i class="fa fa-star-half-o "></i></li>
                            </ul>
                            <div class="author-info ">
                                <h4 class="name ">— Carrie</h4>
                            </div>
                        </div>

                        <div class="item ">
                            <p class="desc ">“My case was a divorce. I went through a friend to get a name for a lawyer. I called and they told me they were too busy but gave me the name of a lawyer from Wood Gold. I called her office and I received an appointment the
                                following week. She gave me a consultation and I let her know my situation. She went right to work on my case.
                                <br> From the first time I met her, I was treated with respect. She listened to me and did a very good job on explaining what was the next step and what had to be done in the future.
                                <br> During my case, my lawyer and her legal assistant always kept in communication with me. There was no problem ever in asking questions and receiving feedback from her office. I am thankful that Wood Gold was there for
                                me.
                                <br> Wood Gold treated me with respect and I was not made to feel this was a lawyer/client business deal. I have and will continue to recommend them to people I know who need the services of an honest and caring law firm.
                                <br> Even though I am not in need of their services at this time, I am still in contact with them as friends. I am thankful for them, their hard work, dedication and making this experience less painful and stressful for
                                myself.”
                            </p>
                            <ul class="ratings ">
                                <li><i class="fa fa-star "></i></li>
                                <li><i class="fa fa-star "></i></li>
                                <li><i class="fa fa-star "></i></li>
                                <li><i class="fa fa-star "></i></li>
                                <li><i class="fa fa-star-half-o "></i></li>
                            </ul>
                            <div class="author-info ">
                                <h4 class="name ">—Bubba</h4>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Testimonia Section End -->
    </div>

@endsection

