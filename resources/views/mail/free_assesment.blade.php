.@php
    // dd(Session::get('Consultation'));
    $data = App\ContactUs::find(Session::get('assesment'));
    // $data = App\ContactUs::find(4);
    // dd($assesment);
@endphp
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>free assesment</title>
    <style>
        /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 768px;
            padding: 10px;
            width: 768px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 768px;
            padding: 10px;
        }

        /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #3498db;
            text-decoration: underline;
        }

        /* -------------------------------------
          BUTTONS
      ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn>tbody>tr>td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            color: #3498db;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize;
        }

        .btn-primary table td {
            background-color: #3498db;
        }

        .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff;
        }

        /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important;
            }

            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important;
            }

            table[class=body] .content {
                padding: 0 !important;
            }

            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table[class=body] .btn table {
                width: 100% !important;
            }

            table[class=body] .btn a {
                width: 100% !important;
            }

            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

        .btn table{
            width: 100%;
        }
        .btn-primary table td{
            background: transparent;
        }
        .table td, .table th {
            text-transform: capitalize;
            padding: 10px 0px;
            border: 1px solid gray;
        }
        table{
            border-collapse: collapse;
            margin-bottom: 30px;
        }
    </style>
</head>

<body class="">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content">

                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class="wrapper">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <p>Hi there,</p>
                                            <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                                class="btn btn-primary">
                                                <tbody>
                                                    <tr>
                                                        <td align="left">
                                                            <div class="table-responsive">
                                                                <table class="table text-center">
                                                                    {{-- <tr>
                                                                        <th>First name</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->first_name }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>middle name</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->middle_name }}</th>
                                                                    </tr> --}}
                                                                    <tr>
                                                                        <th>Last name</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->last_name }}</th>
                                                                    </tr>
                                                                    {{-- <tr>
                                                                        <th>Spouse First name</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->spouse_first_name }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Spouse middle name</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->spouse_middle_name }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Spouse Last name</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->spouse_last_name }}</th>
                                                                    </tr> --}}
                                                                    <tr>
                                                                        <th>gender</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->gender }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Date of birth</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->date_of_birth }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Marital Status</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->marital_status }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Number of children</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->number_of_children }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>email</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->email }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>phone</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->phone }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>citizenship</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->citizenship }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Residential Address</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->residential_address }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Legal Status</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->legal_status }}</th>
                                                                    </tr>
                                                                    {{-- <tr>
                                                                        <th>Cirtificate</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->cirtificate }}</th>
                                                                    </tr> --}}
                                                                    <tr>
                                                                        <th>Website</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->website }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>message</th>
                                                                        <th>:</th>
                                                                        <th style="white-space: break-spaces">{{ $data->message }}</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Created at</th>
                                                                        <th>:</th>
                                                                        <th>{{ $data->created_at->format('d,M Y h:s:i a') }}</th>
                                                                    </tr>
                                                                </table>
                                                                <table class="table text-center">
                                                                    <tr>
                                                                        <th colspan="5">work experience</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>From M/D/Y</th>
                                                                        <th>To M/D/Y  Present</th>
                                                                        <th>Title, duties and responsibilities (number of hours worked per week)</th>
                                                                        <th>City,Country</th>
                                                                        <th>Name of the employer</th>
                                                                    </tr>
                                                                    @php
                                                                        $experiences = json_decode($data->experience);
                                                                    @endphp
                                                                    @foreach ($experiences as $experience)
                                                                        <tr>
                                                                            <td>{{ $experience->from }}</td>
                                                                            <td>{{ $experience->to }}</td>
                                                                            <td>{{ $experience->duties }}</td>
                                                                            <td>{{ $experience->city }}</td>
                                                                            <td>{{ $experience->name }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>

                                                                <table class="table text-center">
                                                                    <tr>
                                                                        <th colspan="5">Eduction</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>From <br> Month/Year</th>
                                                                        <th>To <br> Month/Year</th>
                                                                        <th>Name of the institution <br> (start with the recent eduction)</th>
                                                                        <th>City,Country</th>
                                                                        <th>Certificate, Diploma or degree issued, <br> field of study and major <br>(as it is indicated in your diploma)</th>
                                                                    </tr>
                                                                    @php
                                                                        $cirtificates = json_decode($data->cirtificate);
                                                                    @endphp
                                                                    @foreach ($cirtificates as $cirtificate)
                                                                        <tr>
                                                                            <td>{{ $cirtificate->from }}</td>
                                                                            <td>{{ $cirtificate->to }}</td>
                                                                            <td>{{ $cirtificate->name_of_institue }}</td>
                                                                            <td>{{ $cirtificate->city_country }}</td>
                                                                            <td>{{ $cirtificate->certificate_degree }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>

                                                                <table class="table text-center">
                                                                    <tr>
                                                                        <th colspan="5">Knowledge of English</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Title</th>
                                                                        <th>Result</th>
                                                                        {{-- <th></th>
                                                                        <th>High</th> --}}
                                                                        {{-- <th>Moderate</th> --}}
                                                                        {{-- <th>Basic</th>
                                                                        <th>None</th>
                                                                        <th>IELTS-G</th>
                                                                        <th>CELPIP-G</th> --}}
                                                                    </tr>
                                                                    <tr>
                                                                        @php
                                                                            $datas = json_decode($data->english_speak);
                                                                            // dd($datas[0])
                                                                        @endphp
                                                                        <td>Speak</td>
                                                                        @for ($i = 0; $i < 6; $i++)
                                                                            @if (isset($datas[0][$i]))
                                                                                <td style="text-align: center;">{{ $datas[0][$i] }}</td>
                                                                            @endif
                                                                        @endfor
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Listen</td>
                                                                        @for ($i = 0; $i < 6; $i++)
                                                                            @if (isset($datas[1][$i]))
                                                                                <td style="text-align: center;">{{ $datas[1][$i] }}</td>
                                                                            @endif
                                                                        @endfor
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Read</td>
                                                                        @for ($i = 0; $i < 6; $i++)
                                                                            @if (isset($datas[2][$i]))
                                                                                <td style="text-align: center;">{{ $datas[2][$i] }}</td>
                                                                            @endif
                                                                        @endfor
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Write</td>
                                                                        @for ($i = 0; $i < 6; $i++)
                                                                            @if (isset($datas[3][$i]))
                                                                                <td style="text-align: center;">{{ $datas[3][$i] }}</td>
                                                                            @endif
                                                                        @endfor
                                                                    </tr>
                                                                </table>

                                                                <table class="table text-center">
                                                                    <tr>
                                                                        <th colspan="5">Knowledge of French</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Title</th>
                                                                        <th>Result</th>
                                                                        {{-- <th></th>
                                                                        <th>High</th>
                                                                        <th>Moderate</th>
                                                                        <th>Basic</th>
                                                                        <th>None</th>
                                                                        <th>IELTS-G</th>
                                                                        <th>CELPIP-G</th> --}}
                                                                    </tr>
                                                                    <tr>
                                                                        @php
                                                                            $datas = json_decode($data->french_speak);
                                                                            // dd($datas[0])
                                                                        @endphp
                                                                        <td>Speak</td>
                                                                        @for ($i = 0; $i < 6; $i++)
                                                                            @if (isset($datas[0][$i]))
                                                                                <td style="text-align: center;">{{ $datas[1][$i] }}</td>
                                                                            @endif
                                                                        @endfor
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Listen</td>
                                                                        @for ($i = 0; $i < 6; $i++)
                                                                            @if (isset($datas[1][$i]))
                                                                                <td style="text-align: center;">{{ $datas[1][$i] }}</td>
                                                                            @endif
                                                                        @endfor
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Read</td>
                                                                        @for ($i = 0; $i < 6; $i++)
                                                                            @if (isset($datas[2][$i]))
                                                                                <td style="text-align: center;">{{ $datas[2][$i] }}</td>
                                                                            @endif
                                                                        @endfor
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Write</td>
                                                                        @for ($i = 0; $i < 6; $i++)
                                                                            @if (isset($datas[3][$i]))
                                                                                <td style="text-align: center;">{{ $datas[3][$i] }}</td>
                                                                            @endif
                                                                        @endfor
                                                                    </tr>
                                                                </table>

                                                                <table class="table text-center table-bordered">
                                                                    <tr>
                                                                        <th colspan="5">Questions</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Question</th>
                                                                        <th>Answer</th>
                                                                    </tr>
                                                                    @php
                                                                        $datas = json_decode($data->questions);
                                                                        //dd($datas[3]);
                                                                        $quetions = [
                                                                            'Have you ever remained beyond the validity of your status, attended school or worked without authorization in Canada or any other country? If “yes”, please provide details',
                                                                            'Have you ever been refused any kind of visa, admission, or been ordered to leave Canada or any other country? If “yes”, please provide details.',
                                                                            'Have you legally worked in Canada for one year or longer? If so, how long?',
                                                                            'Have you ever committed an offence or been charged with an offence in any country?',
                                                                            'What is your verifiable personal net worth in Canadian Dollar?',
                                                                            'Have you ever submitted an application for immigration to Canada in the past? If yes, please provide details.',
                                                                            'How much money you are able to bring for settling in Canada (Canadian Currency)?',
                                                                            "Do you have a relative or relatives in Canada, such as a parent, grandparent, child, grandchild, child of a parent (Sibling), 
                                                                            chi ld of a grandparent (aunt or uncle), or grandchild of parents (niece or nephew), who is 18 years or older and living in Canada
                                                                            , and who is a Canadian citizen or permanent resident)?If so, what is their status in Canada and where do they reside?",
                                                                            "Do you have friends in Canada? If so, please indicate their city of residence.",
                                                                            'Any other information that you think might be of assistance?'
                                                                        ];
                                                                    @endphp
                                                                    @for ($i = 1; $i < 10; $i++)
                                                                        <tr>
                                                                            @if (isset($datas[$i][0]))
                                                                                <td style="text-align: left;width:70%;text-align: left;white-space: break-spaces;">
                                                                                    <h5>Question:</h5>
                                                                                    {{ isset($quetions[$i-1])?$quetions[$i-1]:'' }}
                                                                                    <br>
                                                                                    <h5>Answer:</h5>
                                                                                    {{ $datas[$i][0] }}
                                                                                </td>
                                                                                @if(isset( $datas[$i][1] ))
                                                                                    <td style="text-align: center;width:30%">{{ $datas[$i][1] }}</td>
                                                                                @else
                                                                                    <td></td>
                                                                                @endif
                                                                            @endif
                                                                        </tr>
                                                                    @endfor
                                                        
                                                                </table>
                                                        
                                                        
                                                                <table class="table text-center table-bordered">
                                                                    <tr>
                                                                        <th colspan="5">How did you hear about us?</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Question</th>
                                                                        <th>Answer</th>
                                                                    </tr>
                                                                    @for($i=0;$i<8;$i++)
                                                                        @if(isset($datas[11][$i] ) && isset($datas[11][$i+1]) )
                                                                            @if($datas[11][$i] != 'Other: (pls specify)')
                                                                                <tr>
                                                                                    <td style="text-align: left;width:70%;text-align: left;white-space: break-spaces;">
                                                                                        {{ $datas[11][$i] }}
                                                                                    </td>
                                                                                    <td>{{ $datas[11][$i+1] == 'on'? 'yes' : 'no' }}</td>
                                                                                    @php
                                                                                        if($datas[11][$i+1] == 'on')$i+=2;
                                                                                    @endphp
                                                                                </tr>
                                                                            @else
                                                                                <tr>
                                                                                    <td style="text-align: left;width:70%;text-align: left;white-space: break-spaces;">
                                                                                        {{ $datas[11][$i] }}
                                                                                    </td>
                                                                                    <td>{{ $datas[11][$i+1]}}</td>
                                                                                </tr>
                                                                            @endif
                                                                        @endif
                                                                    @endfor
                                                        
                                                                </table>

                                                                <style>
                                                                    .table td, .table th{
                                                                        text-transform: capitalize;
                                                                    }
                                                                </style>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->

                    <!-- START FOOTER -->
                    <div class="footer">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="content-block">
                                    <span class="apple-link">Company njahanlaw.ca</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->

                </div>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
</body>

</html>
