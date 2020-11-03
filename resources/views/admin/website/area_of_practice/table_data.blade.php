<div class="card-body">
    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Heading one</th>
                    <th scope="col">Heading two</th>
                    <th scope="col">Banner Image</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp

                @foreach ($banners as $key => $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->heading_1 }}</td>
                        <td>{{ $item->heading_2 }}</td>
                        <td> <img src="/{{ $item->banner_image }}" style="height: 40px;" alt=""></td>
                        <td>{{ $item->created_at->format('d-M-Y h:i:s a') }}</td>
                        <td>
                            <ul class="d-flex justify-content-center table_action_list">
                                <li><a class="data_view_btn" href="{{ route('admin_banner_view',$item->id) }}"><i class="fa fa-plus"></i></a></li>
                                <li>
                                    <a href="#" class="edit_btn"
                                        data-href="{{ route('admin_banner_update') }}"
                                        data-edit_href="{{ route('admin_banner_edit') }}?id={{ $item->id }}"
                                        data-toggle="modal" data-target="#formemodal">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </li>
                                <li><a href="#" data-href="{{ route('admin_banner_delete', $item->id) }}"
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
    {{ $banners->links() }}
</div>
