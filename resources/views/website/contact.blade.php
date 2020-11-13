
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
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name" placeholder="First Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Middle Name</label>
                                    <input type="text" name="middle_name" placeholder="Middle Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Last Name</label>
                                    <input type="text" name="last_name" placeholder="Last Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6 col-sm-0"></div>

                                <div class="col-md-6">
                                    <label for="">Spouse First Name</label>
                                    <input type="text" name="spouse_first_name" placeholder="Spouse,s First Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Spouse Middle Name</label>
                                    <input type="text" name="spouse_middle_name" placeholder="Spouse,s Middle Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Spouse Last Name</label>
                                    <input type="text" name="spouse_last_name" placeholder="Spouse,s Last Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6 col-sm-0"></div>

                                <div class="col-md-6">
                                    <label for="">Gender</label>
                                    <select name="gender" id="" class="form-control">
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
                                    <select name="marital_status" id="" class="form-control">
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="devorced">Devorced</option>
                                        <option value="in_a_commom_law relation">In a common-law relation</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Number Of Children</label>
                                    <input type="text" name="number_of_children" placeholder="Number Of Children">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" placeholder="Your Phone" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Citizenship</label>
                                    <input type="text" name="citizenship" placeholder="Your citizenship" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Residential Address</label>
                                    <input type="text" name="residential_address" placeholder="Your residential address ( city &amp; country )" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="">
                                        Your legal status in the country of residence (please provide the date of your initial
                                        arrival, types of visas, dates of documented and undocumented periods of stay, if applicable)
                                    </label>
                                    <input type="text" name="legal_status" placeholder="Your legal status">
                                </div>
                                <div class="col-12">
                                    <label for="">
                                        Your highest education achieved (High School Certificate, Collage Diploma, Bachelor’s or Master’s degree, PhD)
                                    </label>
                                </div>
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>From <br> Month/Year</th>
                                            <th>To <br> Month/Year</th>
                                            <th>Name of the institution <br> (start with the recent eduction)</th>
                                            <th>City,Country</th>
                                            <th>Certificate, Diploma or degree issued, field of study and major (as it is indicated in your diploma)</th>
                                        </tr>
                                        @for ($i = 0; $i < 5; $i++)
                                            <tr>
                                                <td><input type="text" name="from_month_or_year[]"></td>
                                                <td><input type="text" name="to_month_or_year[]"></td>
                                                <td><input type="text" name="name_of_institution[]"></td>
                                                <td><input type="text" name="city_country[]"></td>
                                                <td><input type="text" name="certificate_degree[]"></td>
                                            </tr>
                                        @endfor
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="website" placeholder="Your Website">
                                </div>
                                <div class="col-md-12">
                                    <textarea placeholder="Addional Message" name="message" required></textarea>
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
        <style>
            label{
                color: black;
                font-weight: 600;
            }
        </style>
    </div>
    <!-- Contact Inner Sction End -->

    @endsection
