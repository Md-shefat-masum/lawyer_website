
    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <th>First name</th>
                <th>:</th>
                <th>{{ $data->first_name }}</th>
            </tr>
            <tr>
                <th>middle name</th>
                <th>:</th>
                <th>{{ $data->middle_name }}</th>
            </tr>
            <tr>
                <th>Last name</th>
                <th>:</th>
                <th>{{ $data->last_name }}</th>
            </tr>
            <tr>
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
            </tr>
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

        {{ json_decode($data->english_speak) }}

        <style>
            .table td, .table th{
                text-transform: capitalize;
            }
        </style>
    </div>
