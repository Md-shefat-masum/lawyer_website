
    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <td colspan="3">
                    <img src="{{ asset(''.App\Review::where('banner','!=',NULL)->latest()->first()->banner) }}" alt="banenr" style="height: 200px">
                </td>
            </tr>
            <tr>
                <th>Name</th>
                <th>:</th>
                <th>{{ $data->name }}</th>
            </tr>
            <tr>
                <th>Description</th>
                <th>:</th>
                <th style="width: 70%;word-break: break-all;white-space: break-spaces;">{{ $data->description }}</th>
            </tr>
            <tr>
                <th>Star</th>
                <th>:</th>
                <th>{{ $data->star }}</th>
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
