<div class="card-body">
    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">law Type</th>
                    <th scope="col">description</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp

                @foreach ($free_consultations as $key => $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->law->name }}</td>
                        <td>{{ $item->message }}</td>
                        <td>{{ $item->created_at->format('d-M-Y h:i:s a') }}</td>
                        <td>
                            <ul class="d-flex justify-content-center table_action_list">
                                <li><a class="data_view_btn" href="{{ route('admin_free_consultation_view',$item->id) }}"><i class="fa fa-plus"></i></a></li>
                                <li>
                                    <a href="#" class="edit_btn"
                                        data-href="{{ route('admin_free_consultation_update') }}"
                                        data-edit_href="{{ route('admin_free_consultation_edit') }}?id={{ $item->id }}"
                                        data-toggle="modal" data-target="#formemodal">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </li>
                                <li><a href="#" data-href="{{ route('admin_free_consultation_delete', $item->id) }}"
                                        class="delete_btn" data-toggle="modal"
                                        data-target="#modal-animation-1"><i class="fa fa-trash"></i></a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="card-footer">
    {{ $free_consultations->links() }}
</div>
