@extends('layouts.admin.admin')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title">Basic Informations</h5>
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
                        <form action="{{ route('admin_about_us_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form_content">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="input-1">Logo</label> <span class="text-danger"></span>
                                            <input type="file" name="logo" class="form-control" placeholder="logo" value="{{ old('logo') }}">
                                        </div>
                                        <div class="col-4">
                                            <img src="{{ asset(''.$information->logo) }}" alt="logo" style="height: 70px;">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="input-1">profile pic</label> <span class="text-danger"></span>
                                            <input type="file" name="profile_pic" class="form-control" placeholder="profile_pic" value="{{ $information->profilepic }}">
                                        </div>
                                        <div class="col-4">
                                            <img src="{{ asset(''.$information->profile_pic) }}" alt="profile_pic" style="height: 70px">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-1">email1</label> <span class="text-danger"></span>
                                    <input type="text" name="email_1" class="form-control" placeholder="email" value="{{ $information->email_1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">email2</label> <span class="text-danger"></span>
                                    <input type="text" name="email_2" class="form-control" placeholder="email" value="{{ $information->email_2 }}">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">mobile no1</label> <span class="text-danger"></span>
                                    <input type="text" name="mobile_no_1" class="form-control" placeholder="mobile_no_1" value="{{ $information->mobile_no_1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">mobile no2</label> <span class="text-danger"></span>
                                    <input type="text" name="mobile_no_2" class="form-control" placeholder="mobile_no_2" value="{{ $information->mobile_no_2 }}">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">footer short about</label> <span class="text-danger"></span>
                                    <input type="text" name="footer_short_about" class="form-control" placeholder="footer_short_about" value="{{ $information->footer_short_about }}">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">address</label> <span class="text-danger"></span>
                                    <input type="text" name="address" class="form-control" placeholder="address" value="{{ $information->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">work time</label> <span class="text-danger"></span>
                                    <input type="text" name="work_time" class="form-control" placeholder="work_time" value="{{ $information->work_time }}">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">map link</label> <span class="text-danger"></span>
                                    <input type="text" name="map" class="form-control" placeholder="map" value="{{ $information->map }}">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">copy right</label> <span class="text-danger"></span>
                                    <input type="text" name="copy_right" class="form-control" placeholder="copy_right" value="{{ $information->copy_right }}">
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
@endsection
