
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
                                    <a href="#">{{ $basic_information->mobile_1  }}</a>
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

                            {{-- <h2 class="title mb-33">Get In Touch</h2>
                            <h2 class="title mb-33">NJLPC</h2>
                            <div class="desc">
                                Your solutions start here. You have come to the right firm. We are privileged to accept the responsibility of serving you.
                            </div> --}}
                            <div class="sec-title mb-45 xs-mb-31 ">
                                <div class="sub-title primary ">Schedule For</div>
                                <h2 class="title  mb-0 ">Free Consultation</h2>
                            </div>
                        </div>
                        <form method="POST" class="contact-inner-page" action="{{ route('website_free_consultation_submit') }}">
                            @csrf
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <input type="text " name="name" placeholder="Your Name " required>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="email " name="email" placeholder="Your Email " required>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text " name="phone" placeholder="Phone " required>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text " name="subject" placeholder="Subject " required>
                                </div>
                                <div class="col-md-6 col-0 d-none">
                                    <div class="select-option" >
                                        <select name="law_name">
                                            @foreach (App\LawList::OrderBy('name','ASC')->where('status',1)->get() as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <textarea name="message" placeholder="Your Message " required></textarea>
                                </div>
                            </div>
                            <div class="sunbmit-btn mt-30 ">
                                <button class="readon upper " type="submit ">Submit request</button>
                            </div>
                        </form>
                        {{-- <form class="contact-inner-page" action="{{ route('website_contact_message_submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Middle Name</label>
                                    <input type="text" name="middle_name" value="{{ old('middle_name') }}" placeholder="Middle Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Last Name</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6 col-sm-0"></div>

                                <div class="col-md-6">
                                    <label for="">Spouse First Name</label>
                                    <input type="text" name="spouse_first_name" value="{{ old('spouse_first_name') }}" placeholder="Spouse,s First Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Spouse Middle Name</label>
                                    <input type="text" name="spouse_middle_name" value="{{ old('spouse_middle_name') }}" placeholder="Spouse,s Middle Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Spouse Last Name</label>
                                    <input type="text" name="spouse_last_name" value="{{ old('spouse_last_name') }}" placeholder="Spouse,s Last Name ( in capital letters )" required>
                                </div>
                                <div class="col-md-6 col-sm-0"></div>

                                <div class="col-md-6">
                                    <label for="">Gender</label>
                                    <select name="gender" id="" class="form-control" required>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Date Of Birth</label>
                                    <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="date of birth" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Marital Status</label>
                                    <select name="marital_status" id="" value="{{ old('marital_status') }}" class="form-control">
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="devorced">Devorced</option>
                                        <option value="in_a_commom_law relation">In a common-law relation</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Number Of Children</label>
                                    <input type="text" name="number_of_children" value="{{ old('number_of_children') }}" placeholder="Number Of Children">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Your Phone" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Citizenship</label>
                                    <input type="text" name="citizenship" value="{{ old('citizenship') }}" placeholder="Your citizenship" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Residential Address</label>
                                    <input type="text" name="residential_address" value="{{ old('residential_address') }}" placeholder="Your residential address ( city &amp; country )" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="">
                                        Your legal status in the country of residence (please provide the date of your initial
                                        arrival, types of visas, dates of documented and undocumented periods of stay, if applicable)
                                    </label>
                                    <input type="text" name="legal_status" value="{{ old('legal_status') }}" placeholder="Your legal status" required>
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
                                            <th>Certificate, Diploma <br> or degree issued, <br>field of study and major <br>(as it is indicated in your diploma)</th>
                                        </tr>
                                        @for ($i = 0; $i < 5; $i++)
                                            <tr>
                                                <td><input type="text" placeholder="from year" name="from_month_or_year[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="to year" name="to_month_or_year[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="institute" name="name_of_institution[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="city" name="city_country[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="result" name="certificate_degree[]" {{$i==0?'required':''}}></td>
                                            </tr>
                                        @endfor
                                    </table>
                                </div>

                                <div class="col-12">
                                    <label for="">
                                        Please describe your work experience only during the last 10 years (title, duties and responsibilities you have been discharging at every jobs).
                                        An applicant is accountable for every
                                        day of his or her life since 18 years of age (if you were unemployed or travelling, please indicate so, as no time gaps are permitted).
                                    </label>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>From <br> M/D/Y</th>
                                            <th>To <br> M/D/Y <br> Present</th>
                                            <th>Title, duties and <br> responsibilities <br> (number of hours worked per week)</th>
                                            <th>City,Country</th>
                                            <th>Name of the employer </th>
                                        </tr>
                                        @for ($i = 0; $i < 5; $i++)
                                            <tr>
                                                <td><input type="text" placeholder="from year" name="experience_from_month_or_year[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="to year" name="experience_to_month_or_year[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="institute" name="experience_name_of_institution[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="city" name="experience_city_country[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="result" name="experience_certificate_degree[]" {{$i==0?'required':''}}></td>
                                            </tr>
                                        @endfor
                                    </table>
                                </div>

                                <div class="col-12">
                                    <label for="">
                                        Knowledge of English (Please mark “X” or indicate your IELTS-General or CELPIP-G score)
                                    </label>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th></th>
                                            <th>High</th>
                                            <th>Moderate</th>
                                            <th>Basic</th>
                                            <th>None</th>
                                            <th>IELTS-G</th>
                                            <th>CELPIP-G</th>
                                        </tr>
                                        <tr>
                                            <td>Speak</td>
                                            <td><input type="text" placeholder="" name="english_speak[]"></td>
                                            <td><input type="text" placeholder="" name="english_speak[]"></td>
                                            <td><input type="text" placeholder="" name="english_speak[]"></td>
                                            <td><input type="text" placeholder="" name="english_speak[]"></td>
                                            <td><input type="text" placeholder="" name="english_speak[]"></td>
                                            <td><input type="text" placeholder="" name="english_speak[]"></td>
                                        </tr>
                                        <tr>
                                            <td>Listen</td>
                                            <td><input type="text" placeholder="" name="english_listen[]"></td>
                                            <td><input type="text" placeholder="" name="english_listen[]"></td>
                                            <td><input type="text" placeholder="" name="english_listen[]"></td>
                                            <td><input type="text" placeholder="" name="english_listen[]"></td>
                                            <td><input type="text" placeholder="" name="english_listen[]"></td>
                                            <td><input type="text" placeholder="" name="english_listen[]"></td>
                                        </tr>
                                        <tr>
                                            <td>Read</td>
                                            <td><input type="text" placeholder="" name="english_read[]"></td>
                                            <td><input type="text" placeholder="" name="english_read[]"></td>
                                            <td><input type="text" placeholder="" name="english_read[]"></td>
                                            <td><input type="text" placeholder="" name="english_read[]"></td>
                                            <td><input type="text" placeholder="" name="english_read[]"></td>
                                            <td><input type="text" placeholder="" name="english_read[]"></td>
                                        </tr>
                                        <tr>
                                            <td>Write</td>
                                            <td><input type="text" placeholder="" name="english_write[]"></td>
                                            <td><input type="text" placeholder="" name="english_write[]"></td>
                                            <td><input type="text" placeholder="" name="english_write[]"></td>
                                            <td><input type="text" placeholder="" name="english_write[]"></td>
                                            <td><input type="text" placeholder="" name="english_write[]"></td>
                                            <td><input type="text" placeholder="" name="english_write[]"></td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-12">
                                    <label for="">
                                        If you indicated the score, please provide the date you took the test and copy of the test.
                                    </label>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="3">
                                                <input type="date" placeholder="" name="french_date[]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th>High</th>
                                            <th>Moderate</th>
                                            <th>Basic</th>
                                            <th>None</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>Speak</td>
                                            <td><input type="text" placeholder="" name="french_speak[]"></td>
                                            <td><input type="text" placeholder="" name="french_speak[]"></td>
                                            <td><input type="text" placeholder="" name="french_speak[]"></td>
                                            <td><input type="text" placeholder="" name="french_speak[]"></td>
                                            <td><input type="text" placeholder="" name="french_speak[]"></td>
                                            <td><input type="text" placeholder="" name="french_speak[]"></td>
                                        </tr>
                                        <tr>
                                            <td>Listen</td>
                                            <td><input type="text" placeholder="" name="french_listen[]"></td>
                                            <td><input type="text" placeholder="" name="french_listen[]"></td>
                                            <td><input type="text" placeholder="" name="french_listen[]"></td>
                                            <td><input type="text" placeholder="" name="french_listen[]"></td>
                                            <td><input type="text" placeholder="" name="french_listen[]"></td>
                                            <td><input type="text" placeholder="" name="french_listen[]"></td>
                                        </tr>
                                        <tr>
                                            <td>Read</td>
                                            <td><input type="text" placeholder="" name="french_read[]"></td>
                                            <td><input type="text" placeholder="" name="french_read[]"></td>
                                            <td><input type="text" placeholder="" name="french_read[]"></td>
                                            <td><input type="text" placeholder="" name="french_read[]"></td>
                                            <td><input type="text" placeholder="" name="french_read[]"></td>
                                            <td><input type="text" placeholder="" name="french_read[]"></td>
                                        </tr>
                                        <tr>
                                            <td>Write</td>
                                            <td><input type="text" placeholder="" name="french_write[]"></td>
                                            <td><input type="text" placeholder="" name="french_write[]"></td>
                                            <td><input type="text" placeholder="" name="french_write[]"></td>
                                            <td><input type="text" placeholder="" name="french_write[]"></td>
                                            <td><input type="text" placeholder="" name="french_write[]"></td>
                                            <td><input type="text" placeholder="" name="french_write[]"></td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-12">
                                    <label for="">If you indicated the score, please provide the date you took the test and copy of the test.
                                    </label>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td style="width: 70%"></td>
                                            <td>
                                                <input type="date" placeholder="from year" name="question_date[]">
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width: 70%">Have you ever remained beyond the validity of your status, attended school or worked without authorization in Canada or any other country? If “yes”, please provide details
                                            </th>
                                            <td style="width: 15%; text-align: center;">YES</td>
                                            <td style="width: 15%; text-align: center;">NO</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_1[]" class="form-control" readonly>Have you ever been refused any kind of visa, admission, or been ordered to leave Canada or any other country? If “yes”, please provide details.
                                                </textarea>
                                            </th>
                                            <td style="width: 15%"><input type="checkbox" value="yes" name="question_1[]"></td>
                                            <td style="width: 15%"><input type="checkbox" value="no" name="question_1[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_2[]" class="form-control" readonly>Have you legally worked in Canada for one year or longer? If so, how long?
                                                </textarea>
                                            </th>
                                            <td style="width: 15%"><input type="checkbox" value="yes" name="question_2[]"></td>
                                            <td style="width: 15%"><input type="checkbox" value="no" name="question_2[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_3[]" class="form-control" readonly>Have you ever committed an offence or been charged with an offence in any country?
                                                </textarea>
                                            </th>
                                            <td style="width: 15%"><input type="checkbox" value="yes" name="question_3[]"></td>
                                            <td style="width: 15%"><input type="checkbox" value="no" name="question_3[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_4[]" class="form-control" readonly>What is your verifiable personal net worth in Canadian Dollar?
                                                </textarea>
                                            </th>
                                            <td style="width: 15%"><input type="checkbox" value="yes" name="question_4[]"></td>
                                            <td style="width: 15%"><input type="checkbox" value="no" name="question_4[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_5[]" class="form-control" readonly>Have you ever submitted an application for immigration to Canada in the past? If yes, please provide details.
                                                </textarea>
                                            </th>
                                            <td style="width: 15%"><input type="checkbox" value="yes" name="question_5[]"></td>
                                            <td style="width: 15%"><input type="checkbox" value="no" name="question_5[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_6[]" class="form-control" readonly>How much money you are able to bring for settling in Canada (Canadian Currency)?
                                                </textarea>
                                            </th>
                                            <td style="width: 15%"><input type="checkbox" value="yes" name="question_6[]"></td>
                                            <td style="width: 15%"><input type="checkbox" value="no" name="question_6[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_7[]" class="form-control" readonly>Do you have a relative or relatives in Canada, such as a parent, grandparent, child, grandchild, child of a parent (Sibling), child of a grandparent (aunt or uncle), or grandchild of parents (niece or nephew), who is 18 years or older and living in Canada, and who is a Canadian citizen or permanent resident)?If so, what is their status in Canada and where do they reside?
                                                </textarea>
                                            </th>
                                            <td style="width: 15%"><input type="checkbox" value="yes" name="question_7[]"></td>
                                            <td style="width: 15%"><input type="checkbox" value="no" name="question_7[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_8[]" class="form-control" readonly>Do you have friends in Canada? If so, please indicate their city of residence.
                                                </textarea>
                                            </th>
                                            <td style="width: 15%"><input type="checkbox" value="yes" name="question_8[]"></td>
                                            <td style="width: 15%"><input type="checkbox" value="no" name="question_8[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_9[]" class="form-control" readonly>Any other information that you think might be of assistance?
                                                </textarea>
                                            </th>
                                            <td style="width: 15%"><input type="checkbox" value="yes" name="question_9[]"></td>
                                            <td style="width: 15%"><input type="checkbox" value="no" name="question_9[]"></td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" style="text-align: center;">How did you hear about us?</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_from[]" class="form-control" readonly>Facebook:</textarea>
                                            </th>
                                            <td style="width: 15%" colspan="2"><input type="checkbox" value="off" name="question_from[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_from[]" class="form-control" readonly>Friends:</textarea>
                                            </th>
                                            <td style="width: 15%" colspan="2"><input type="checkbox" value="off" name="question_from[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_from[]" class="form-control" readonly>Printed flyers:</textarea>
                                            </th>
                                            <td style="width: 15%" colspan="2"><input type="checkbox" value="off" name="question_from[]"></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 70%">
                                                <textarea name="question_from[]" class="form-control" readonly>Other: (pls specify)</textarea>
                                            </th>
                                            <td style="width: 15%" colspan="2"><input type="text" name="question_from[]"></td>
                                        </tr>
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
                        </form> --}}
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
