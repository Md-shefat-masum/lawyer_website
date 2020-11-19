
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
                @for ($i = 1; $i < 7; $i++)
                    @if (isset($datas[1][$i]))
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
                // dd($datas);
                $quetions = [
                    'Have you ever been refused any kind of visa, admission, or been ordered to leave Canada or any other country? If “yes”, please provide details.',
                    'Have you legally worked in Canada for one year or longer? If so, how long?',
                    'Have you ever committed an offence or been charged with an offence in any country?',
                    'What is your verifiable personal net worth in Canadian Dollar?',
                    'Have you ever submitted an application for immigration to Canada in the past? If yes, please provide details.',
                    'How much money you are able to bring for settling in Canada (Canadian Currency)?',
                    'Do you have a relative or relatives in Canada, such as a parent, grandparent, child, grandchild, child of a parent (Sibling), chi ld of a grandparent (aunt or uncle), or grandchild of parents (niece or nephew), who is 18 years or older and living in Canada, and who is a Canadian citizen or permanent resident)?If so, what is their status in Canada and where do they reside?',
                    'Do you have friends in Canada? If so, please indicate their city of residence.',
                    'Any other information that you think might be of assistance?'
                ];
            @endphp
            @for ($i = 1; $i < 10; $i++)
                <tr>
                    {{-- @for ($j = 0; $j < 2; $j++) --}}
                        @if (isset($datas[$i][0]))
                            <td style="text-align: center;width:70%;text-align: left;white-space: break-spaces;">
                                <h5>Question:</h5>
                                {{ isset($quetions[$i])?$quetions[$i]:'' }}
                                <br>
                                <h5>Answer:</h5>
                                {{ $datas[$i][0] }}
                            </td>
                            <td style="text-align: center;width:30%">{{ $datas[$i][1] }}</td>
                        @endif
                    {{-- @endfor --}}
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
            <tr>
                <td style="text-align: center;width:70%;text-align: left;white-space: break-spaces;">
                    {{ $datas[10][0] }}
                </td>
                <td>{{ $datas[10][1] == 'on'? 'yes' : 'no' }}</td>
            </tr>
            <tr>
                <td style="text-align: center;width:70%;text-align: left;white-space: break-spaces;">
                    {{ $datas[10][2] }}
                </td>
                <td>{{ $datas[10][3] == 'on'? 'yes' : 'no' }}</td>
            </tr>
            <tr>
                <td style="text-align: center;width:70%;text-align: left;white-space: break-spaces;">
                    {{ $datas[10][4] }}
                </td>
                <td>{{ $datas[10][5] == 'on'? 'yes' : 'no' }}</td>
            </tr>
            <tr>
                <td style="text-align: center;width:70%;text-align: left;white-space: break-spaces;">
                    {{ $datas[10][6] }}
                </td>
                <td>{{ $datas[10][7]}}</td>
            </tr>

        </table>

        <style>
            .table td, .table th{
                text-transform: capitalize;
            }
        </style>
    </div>
