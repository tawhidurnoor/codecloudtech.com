@extends('backend.layouts.full.mainlayout')

@section('title')
    <title>Custom Scripts | CodeCloud Technology CMS</title>
@endsection

@section('styles')
@endsection

@section('page-title')
    Custom Scripts
@endsection

@section('body')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-body">
                    <h4 class="card-title">Custom Scripts</h4>
                    <h5 class="card-subtitle mb-3 border-bottom pb-3">
                        Custom scripts of your website wich will be used all over the site.
                    </h5>

                    <form action="{{ route('admin.setup.custom_scripts.update') }}" method="POST" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Head Scripts</label>
                            <textarea name="head_scripts" class="form-control" rows="5">{{ $script->head_scripts }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label>Body Scripts</label>
                            <textarea name="body_scripts" class="form-control" rows="5">{{ $script->body_scripts }}</textarea>
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
