
@extends('layouts.website.website')
@section('content')


    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs innerbg5">
        <div class="container">
            <div class="breadcrumbs-inner text-center">
                <h1 class="breadcrumbs-title white-color">Online Assesment</h1>
                <ul class="breadcrumbs-meta">
                    <li><a href="/">Home</a></li>
                    <li>online assesment</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <style>
        select{
            margin-bottom: 30px;
        }
    </style>

    <!-- Contact Inner Sction Start -->
    <div class="rs-contact inner gray-bg pt-120 md-pt-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 pr-30">
                    <div class="contact-wrap">
                        <div class="sec-title mb-50">
                            <h2 class="title mb-33">Your solutions start here. Check your eligibility, please fill it out and submit.</h2>
                            <div class="row">
                                <div class="col-6">
                                    <button class="readon upper" data-toggle="modal" data-target="#loadSavedModal">Load Prevoious data if saveed.</button>
                                </div>
                            </div>
                        </div>
                        <form class="contact-inner-page assesment_page" action="{{ route('website_contact_message_submit') }}" method="POST">
                            @csrf
                            <div class="datas">
                                <div class="row">
                                    {{-- <div class="col-md-12">
                                        <label for="">First Name</label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name ( in capital letters )" required>
                                    </div> --}}
                                    {{-- <div class="col-md-12">
                                        <label for="">Middle Name</label>
                                        <input type="text" name="middle_name" value="{{ old('middle_name') }}" placeholder="Middle Name ( in capital letters )" required>
                                    </div> --}}

                                    <div class="col-md-12">
                                        <label for="">Last Name , Given Name(s)*</label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name ( in capital letters )" required>
                                    </div>

                                    {{-- <div class="col-md-12 col-sm-0"></div> --}}

                                    {{-- <div class="col-md-12">
                                        <label for="">Spouse First Name</label>
                                        <input type="text" name="spouse_first_name" value="{{ old('spouse_first_name') }}" placeholder="Spouse,s First Name ( in capital letters )" required>
                                    </div> --}}
                                    {{-- <div class="col-md-12">
                                        <label for="">Spouse Middle Name</label>
                                        <input type="text" name="spouse_middle_name" value="{{ old('spouse_middle_name') }}" placeholder="Spouse,s Middle Name ( in capital letters )" required>
                                    </div> --}}
                                    {{-- <div class="col-md-12">
                                        <label for="">Spouse Last Name</label>
                                        <input type="text" name="spouse_last_name" value="{{ old('spouse_last_name') }}" placeholder="Spouse,s Last Name ( in capital letters )" required>
                                    </div> --}}
                                    {{-- <div class="col-md-12 col-sm-0"></div> --}}

                                    <div class="col-md-12">
                                        <label for="">Gender</label>
                                        <select name="gender" id="" class="form-control" required>
                                            <option value="male">male</option>
                                            <option value="female">female</option>
                                            <option value="other">other</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Date Of Birth</label>
                                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="date of birth" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Marital Status</label>
                                        <select name="marital_status" id="" value="{{ old('marital_status') }}" class="form-control">
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="devorced">Devorced</option>
                                            <option value="in_a_commom_law relation">In a common-law relation</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Number Of Children</label>
                                        <input type="text" name="number_of_children" value="{{ old('number_of_children') }}" placeholder="Number Of Children">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Your Phone" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Citizenship</label>
                                        <input type="text" name="citizenship" value="{{ old('citizenship') }}" placeholder="Your citizenship" required>
                                    </div>
                                    <div class="col-md-12">
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
                                        <h4 style="border-bottom: 1px solid gray;">Education</h4>
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
                                                <th colspan="3">Certificate, Diploma <br> or degree issued, <br>field of study and major <br>(as it is indicated in your diploma)</th>
                                            </tr>
                                            {{-- @for ($i = 0; $i < 2; $i++) --}}
                                            @php
                                                $i = 0;
                                            @endphp
                                            <tr>
                                                <td><input type="text" placeholder="" name="from_month_or_year[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="" name="to_month_or_year[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="" name="name_of_institution[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="" name="city_country[]" {{$i==0?'required':''}}></td>
                                                <td><input type="text" placeholder="" name="certificate_degree[]" {{$i==0?'required':''}}></td>
                                                <td style="border-right: 0"></td>
                                                <td style="border-left: 0"><i class="fa fa-plus border border-success add_new_education_row add_br_50"></i></td>
                                            </tr>
                                            @php
                                                $i = 1;
                                            @endphp
                                            {{-- @endfor --}}
                                        </table>
                                    </div>

                                    <div class="col-12">
                                        <h4 style="border-bottom: 1px solid gray;">Employment</h4>
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
                                                <th colspan="3">Name of the employer </th>
                                            </tr>
                                            {{-- @for ($i = 0; $i < 2; $i++) --}}
                                                @php
                                                    $i=0;
                                                @endphp
                                                    <tr>
                                                        <td><input type="text" placeholder="" name="experience_from_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" name="experience_to_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" name="experience_name_of_institution[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" name="experience_city_country[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" name="experience_certificate_degree[]" {{$i==0?'required':''}}></td>
                                                        <td style="border-right: 0"></td>
                                                        <td style="border-left: 0"><i class="fa fa-plus border border-success add_new_employment_row add_br_50"></i></td>
                                                    </tr>
                                                @php
                                                    $i=1;
                                                @endphp
                                            {{-- @endfor --}}
                                        </table>
                                    </div>

                                    <div class="col-12">
                                        <h4 style="border-bottom: 1px solid gray;">English Language Skills</h4>
                                    </div>

                                    <div class="col-12">
                                        <label for="">
                                            Knowledge of English (Please mark “X” or indicate your IELTS-General or CELPIP-G score)
                                        </label>
                                        <table class="table table-bordered" class="text-center">
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
                                                <td><input type="checkbox" placeholder="" value="heigh" name="english_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="moderate" name="english_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="basic" name="english_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="none" name="english_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="ielts" name="english_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="celpip" name="english_speak[]"></td>
                                            </tr>
                                            <tr>
                                                <td>Listen</td>
                                                <td><input type="checkbox" placeholder="" value="heigh" name="english_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="moderate" name="english_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="basic" name="english_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="none" name="english_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="ielts" name="english_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="celpip" name="english_listen[]"></td>
                                            </tr>
                                            <tr>
                                                <td>Read</td>
                                                <td><input type="checkbox" placeholder="" value="heigh" name="english_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="moderate" name="english_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="basic" name="english_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="none" name="english_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="ielts" name="english_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="celpip" name="english_read[]"></td>
                                            </tr>
                                            <tr>
                                                <td>Write</td>
                                                <td><input type="checkbox" placeholder="" value="heigh" name="english_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="moderate" name="english_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="basic" name="english_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="none" name="english_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="ielts" name="english_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="celpip" name="english_write[]"></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-12">
                                        <label for="">
                                            If you indicated the score, please provide the date you took the test and copy of the test.
                                        </label>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Test Name</th>
                                                <th>Date</th>
                                                <th>Speak</th>
                                                <th>Listen</th>
                                                <th colspan="3">Read Write</th>
                                            </tr>
                                            {{-- @for ($i = 0; $i < 2; $i++) --}}
                                            @php $i=0; @endphp
                                                <tr>
                                                    <td><input type="text" placeholder="" name="english_test_name[]" {{$i==0?'required':''}}></td>
                                                    <td><input type="text" placeholder="" name="english_test_date[]" {{$i==0?'required':''}}></td>
                                                    <td><input type="text" placeholder="" name="english_test_speak[]" {{$i==0?'required':''}}></td>
                                                    <td><input type="text" placeholder="" name="english_test_listen[]" {{$i==0?'required':''}}></td>
                                                    <td><input type="text" placeholder="" name="english_test_read_write[]" {{$i==0?'required':''}}></td>
                                                    <td style="border-right: 0"></td>
                                                    <td style="border-left: 0"><i class="fa fa-plus border border-success add_new_english_skill_row add_br_50"></i></td>
                                                </tr>
                                            @php $i=1; @endphp
                                            {{-- @endfor --}}
                                        </table>
                                    </div>

                                    <div class="col-12">
                                        <h4 style="border-bottom: 1px solid gray;">French Language Skills</h4>
                                    </div>

                                    <div class="col-12">
                                        <label for="">
                                            Knowledge of English (Please mark “X” or indicate your IELTS-General or CELPIP-G score)
                                        </label>
                                        <table class="table table-bordered" class="text-center">
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
                                                <td><input type="checkbox" placeholder="" value="heigh" name="french_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="moderate" name="french_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="basic" name="french_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="none" name="french_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="ielts" name="french_speak[]"></td>
                                                <td><input type="checkbox" placeholder="" value="celpip" name="french_speak[]"></td>
                                            </tr>
                                            <tr>
                                                <td>Listen</td>
                                                <td><input type="checkbox" placeholder="" value="heigh" name="french_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="moderate" name="french_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="basic" name="french_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="none" name="french_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="ielts" name="french_listen[]"></td>
                                                <td><input type="checkbox" placeholder="" value="celpip" name="french_listen[]"></td>
                                            </tr>
                                            <tr>
                                                <td>Read</td>
                                                <td><input type="checkbox" placeholder="" value="heigh" name="french_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="moderate" name="french_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="basic" name="french_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="none" name="french_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="ielts" name="french_read[]"></td>
                                                <td><input type="checkbox" placeholder="" value="celpip" name="french_read[]"></td>
                                            </tr>
                                            <tr>
                                                <td>Write</td>
                                                <td><input type="checkbox" placeholder="" value="heigh" name="french_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="moderate" name="french_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="basic" name="french_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="none" name="french_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="ielts" name="french_write[]"></td>
                                                <td><input type="checkbox" placeholder="" value="celpip" name="french_write[]"></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-12">
                                        <label for="">
                                            If you indicated the score, please provide the date you took the test and copy of the test.
                                        </label>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Test Name</th>
                                                <th>Date</th>
                                                <th>Speak</th>
                                                <th>Listen</th>
                                                <th colspan="3">Read Write</th>
                                            </tr>
                                            {{-- @for ($i = 0; $i < 2; $i++) --}}
                                            @php $i=0; @endphp
                                                <tr>
                                                    <td><input type="text" placeholder="" name="french_test_name[]" {{$i==0?'required':''}}></td>
                                                    <td><input type="text" placeholder="" name="french_test_date[]" {{$i==0?'required':''}}></td>
                                                    <td><input type="text" placeholder="" name="french_test_speak[]" {{$i==0?'required':''}}></td>
                                                    <td><input type="text" placeholder="" name="french_test_listen[]" {{$i==0?'required':''}}></td>
                                                    <td><input type="text" placeholder="" name="french_test_read_write[]" {{$i==0?'required':''}}></td>
                                                    <td style="border-right: 0"></td>
                                                    <td style="border-left: 0"><i class="fa fa-plus border border-success add_new_french_skill_row add_br_50"></i></td>
                                                </tr>
                                            @php $i=1; @endphp
                                            {{-- @endfor --}}
                                        </table>
                                    </div>


                                    <div class="col-12">
                                        <h4 style="border-bottom: 1px solid gray;">Other</h4>
                                    </div>

                                    <div class="col-12">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 70%">Question</th>
                                                <td style="width: 15%; text-align: center;">YES</td>
                                                <td style="width: 15%; text-align: center;">NO</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">Have you ever remained beyond the validity of your status, attended school or worked without authorization in Canada or any other country? If “yes”, please provide details.</label>
                                                    <textarea name="question_0[]" id="question_0" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_0_no" value="yes" name="question_0[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_0_no" value="no" name="question_0[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">Have you ever been refused any kind of visa, admission, or
                                                        been ordered to leave Canada or any other country? If “yes”, please provide details.</label>
                                                    <textarea name="question_1[]" id="question_1" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_1_yes" value="yes" name="question_1[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_1_no" value="no" name="question_1[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">Have you legally worked in Canada for one year or longer? If so, how long?</label>
                                                    <textarea name="question_2[]" id="question_2" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_2_yes" value="yes" name="question_2[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_2_no" value="no" name="question_2[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">Have you ever committed an offence or been charged with an offence in any country?</label>
                                                    <textarea name="question_3[]" id="question_3" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_3_yes" value="yes" name="question_3[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_3_no" value="no" name="question_3[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">What is your verifiable personal net worth in Canadian Dollar?</label>
                                                    <textarea name="question_4[]" id="question_4" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_4_yes" value="yes" name="question_4[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_4_no" value="no" name="question_4[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">Have you ever submitted an application for immigration to Canada in the past? If yes, please provide details.</label>
                                                    <textarea name="question_5[]" id="question_5" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_5_yes" value="yes" name="question_5[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_5_no" value="no" name="question_5[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">How much money you are able to bring for settling in Canada (Canadian Currency)?</label>
                                                    <textarea name="question_6[]" id="question_6" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_6_yes" value="yes"  name="question_6[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_6_no" value="no" name="question_6[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">Do you have a relative or relatives in Canada, such as a parent, grandparent, child, grandchild, child of a parent (Sibling), chi
                                                        ld of a grandparent (aunt or uncle), or grandchild of parents (niece or nephew), who is 18 years or older and living
                                                        in Canada, and who is a Canadian citizen or permanent resident)?If so, what is their status in Canada and where do they reside?</label>
                                                    <textarea name="question_7[]" id="question_7" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_7_yes" value="yes" name="question_7[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_7_no" value="no" name="question_7[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">Do you have friends in Canada? If so, please indicate their city of residence.</label>
                                                    <textarea name="question_8[]" id="question_8" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_8_yes" value="yes" name="question_8[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_8_no" value="no" name="question_8[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <label for="" class="text-left">Any other information that you think might be of assistance?</label>
                                                    <textarea name="question_9[]" id="question_9" class="form-control" ></textarea>
                                                </th>
                                                <td style="width: 15%"><input type="checkbox" id="question_9_yes" value="yes" name="question_9[]"></td>
                                                <td style="width: 15%"><input type="checkbox" id="question_9_no" value="no" name="question_9[]"></td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" style="text-align: center;">How did you hear about us?</th>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <textarea style="height: 40px;resize: none;color:#026837;margin: 0;overflow: hidden;" name="question_from[]" readonly class="form-control" >Facebook:</textarea>
                                                </th>
                                                <td style="width: 15%" colspan="2"><input type="checkbox" value="on" name="question_from[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <textarea  style="height: 40px;resize: none;color:#026837;margin: 0;overflow: hidden;"  name="question_from[]" readonly class="form-control" >Friends:</textarea>
                                                </th>
                                                <td style="width: 15%" colspan="2"><input type="checkbox" value="on" name="question_from[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <textarea  style="height: 40px;resize: none;color:#026837;margin: 0;overflow: hidden;"  name="question_from[]" readonly class="form-control" >Printed flyers:</textarea>
                                                </th>
                                                <td style="width: 15%" colspan="2"><input type="checkbox" value="on" name="question_from[]"></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 70%">
                                                    <textarea  style="height: 40px;resize: none;color:#026837;margin: 0;overflow: hidden;"  name="question_from[]" readonly class="form-control" >Other: (pls specify)</textarea>
                                                </th>
                                                <td style="width: 15%" colspan="2"><input type="text" placeholder="write here" name="question_from[]"></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" name="website" placeholder="Your Website">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea placeholder="Addional Message" name="message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="row justify-content-start">
                                            <button type="submit" class="readon upper">Submit</button>
                                            <button type="button" class="readon upper btn-warning loginModal" data-toggle="modal" data-target="#loginModal" style="margin-left: 30px">Save and continue later</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            label{
                color: #026837;
                font-weight: 600;
            }
            input,select{
                border: 1px solid #026837!important;
            }
            table tr th,
            table tr td{
                text-align: center
            }
        </style>
    </div>
    <!-- Contact Inner Sction End -->

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Save data for later.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="">type your email</label>
                            <input type="email" name="email" class="form-control user_set_email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary save_data_for_later_use">Save for later</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="loadSavedModal" tabindex="-1" aria-labelledby="loadSavedModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loadSavedModalLabel">Load previous data.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('website_online_assesment_get_data') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="">type your email</label>
                            <input type="email" id="get_saved_data_email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary load_data_btn">Load data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection
