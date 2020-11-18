@extends('layouts.admin.admin')
@section('content')
    @push('cssplugin')
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/summernote/dist/summernote-bs4.css" />
    @endpush
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title">Our Privilege</h5>
                        </div>
                        <div class="col-6">
                            {{-- <a href="#" class="btn btn-outline-tumblr float-right add_btn"
                                data-href="{{ route('admin_user_store') }}" data-add_href="{{ route('admin_user_add') }}"
                                data-toggle="modal" data-target="#formemodal">
                                <i class="fa fa-plus"></i>
                                Add
                            </a> --}}
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card-body">
                        <form action="{{ route('admin_our_privilege_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form_content">
                                <div class="form-group">
                                    <label for="input-1">Description</label> <span class="text-danger"></span>
                                    <textarea name="description" id="" class="form-control description">{!! App\OurPrivilege::first()->description !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn update_btn btn-light px-5"><i class="fa fa-upload"></i>
                                    Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        {{-- {{ $users->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('jsplugin')
        <script src="{{ asset('contents/admin') }}/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
    @endpush
    @push('js')
        <script>
            $(function() {
                $('.description').summernote({
                    height: 400,
                    tabsize: 2
                });
            })
        </script>
    @endpush
@endsection
