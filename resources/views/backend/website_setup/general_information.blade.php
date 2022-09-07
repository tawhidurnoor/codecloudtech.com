@extends('backend.layouts.full.mainlayout')

@section('title')
    <title>General Information | CodeCloud Technology CMS</title>
@endsection

@section('styles')
    <!-- Toastr CSS -->
    <link href="{{ asset('assets_backend/extra-libs/toastr/dist/build/toastr.min.css') }}" rel="stylesheet" />
@endsection

@section('page-title')
    General Information
@endsection

@section('body')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-body">
                    <h4 class="card-title">General Information</h4>
                    <h5 class="card-subtitle mb-3 border-bottom pb-3">
                        Basic information of your website wich will visible all over the site.
                    </h5>

                    <form action="{{ route('admin.setup.general.update') }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Website Name</label>
                            <input type="text" name="website_name" class="form-control"
                                value="{{ $settings->website_name }}">
                        </div>
                        <div class="mb-3">
                            <label>Motto</label>
                            <input type="text" name="motto" class="form-control" value="{{ $settings->motto }}">
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ $settings->phone }}">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $settings->email }}">
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <textarea name="address" class="form-control" rows="5">{{ $settings->address }}</textarea>
                        </div>

                        <div class="form-actions">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-success rounded-pill px-4">
                                    <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-save feather-sm me-1 fill-icon">
                                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                            </path>
                                            <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                            <polyline points="7 3 7 8 15 8"></polyline>
                                        </svg>
                                        Save
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection

@section('scripts')
@endsection
