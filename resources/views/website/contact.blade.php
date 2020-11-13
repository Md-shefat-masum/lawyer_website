
@extends('layouts.website.website')
@section('content')


    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs innerbg5">
        <div class="container">
            <div class="breadcrumbs-inner text-center">
                <h1 class="breadcrumbs-title white-color">Contact</h1>
                <ul class="breadcrumbs-meta">
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Contact Inner Sction Start -->
    <div class="rs-contact inner gray-bg pt-120 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-last md-mb-30">
                    <div class="contact-sidebar">
                        <div class="image-part">
                            <img src="images/contact/sidebar.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title">Head Office</h3>
                            <div class="address-item ml--5 mb-20">
                                <div class="address-icon">
                                    <i class="icon-basic-smartphone"></i>
                                </div>
                                <div class="address-text">
                                    <h5 class="contact-title">Office Phone</h5>
                                    <a href="#">{{ $basic_information->mobile_no_1  }}</a>
                                </div>
                            </div>
                            <div class="address-item ml--5 mb-20">
                                <div class="address-icon">
                                    <i class="icon-basic-mail-multiple"></i>
                                </div>
                                <div class="address-text">
                                    <h5 class="contact-title">Mail Us</h5>
                                    {{-- <a href="#">{{ $basic_information->email_1 }}</a>? --}}
                                    <a href="mailto:info@njahanlaw.ca" >info@njahanlaw.ca</a>
                                </div>
                            </div>
                            <div class="address-item ml--5">
                                <div class="address-icon">
                                    <i class="icon-basic-geolocalize-01"></i>
                                </div>
                                <div class="address-text">
                                    <h3 class="contact-title">Address</h3>
                                    {{ $basic_information->address }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pr-30">
                    <div class="contact-wrap">
                        <div class="sec-title mb-50">
                            <h2 class="title mb-33">Get In Touch</h2>
                            <h2 class="title mb-33">NJLPC</h2>
                            <div class="desc">
                                Your solutions start here. You have come to the right firm. We are privileged to accept the responsibility of serving you.
                            </div>
                        </div>
                        <form class="contact-inner-page" action="{{ route('website_contact_message_submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="First Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Middle Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Last Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6 col-sm-0"></div>

                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Spouse,s First Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Spouse,s Middle Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Spouse,s Last Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6 col-sm-0"></div>

                                <div class="col-md-6">
                                    <label for="">Gender</label>
                                    <select name="" id="" class="form-control">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Date Of Birth</label>
                                    <input type="date" name="date_of_birth" placeholder="date of birth" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Marital Status</label>
                                    <select name="" id="" class="form-control">
                                        <option value="male">Single</option>
                                        <option value="male">Married</option>
                                        <option value="male">Devorced</option>
                                        <option value="female">In a common-law relation</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Your Phone" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="website" placeholder="Your Website">
                                </div>
                                <div class="col-md-12">
                                    <textarea placeholder="Your Message" name="message" required></textarea>
                                    <button type="submit" class="readon upper">Submit Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-120">
            <iframe src="{{ $basic_information->map }}"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!-- Contact Inner Sction End -->

    @endsection
