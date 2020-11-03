
    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <td colspan="3">
                    <img src="{{ asset(''.$data->banner_image) }}" alt="banner" style="height: 200px;padding:10px">
                </td>
            </tr>
            <tr>
                <th>heading one</th>
                <th>:</th>
                <th>{{ $data->heading_1 }}</th>
            </tr>
            <tr>
                <th>heading two</th>
                <th>:</th>
                <th>{{ $data->heading_2 }}</th>
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
