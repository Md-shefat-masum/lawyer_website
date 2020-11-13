
    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <th>Question</th>
                <th>:</th>
                <th>{{ $data->question }}</th>
            </tr>
            <tr>
                <th>Answer</th>
                <th>:</th>
                <th style="white-space: break-spaces;width:70%;">{{ $data->answer }}</th>
            </tr>
            <tr>
                <th>Creator</th>
                <th>:</th>
                <th>{{ $data->creator }}</th>
            </tr>
            <tr>
                <th>Created at</th>
                <th>:</th>
                <th>{{ $data->created_at->format('d,m Y h:s:i a') }}</th>
            </tr>
            <tr>
                <th>Updated at</th>
                <th>:</th>
                <th>{{ $data->updated_at->format('d,m Y h:s:i a') }}</th>
            </tr>
        </table>
    </div>
