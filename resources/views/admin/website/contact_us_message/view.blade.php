
    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <th>name</th>
                <th>:</th>
                <th>{{ $data->name }}</th>
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
                <th>message</th>
                <th>:</th>
                <th style="white-space: break-spaces">{{ $data->message }}</th>
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
