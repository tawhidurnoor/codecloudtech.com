@extends('backend.layouts.full.mainlayout')

@section('title')
    <title>Blogs | CodeCloud Technology CMS</title>
@endsection

@section('styles')
    <link href="{{ asset('assets_backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endsection

@section('page-title')
    Blogs
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus feather-sm">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg> Add
                        </a>
                    </div>
                    <div class="card-body">
                        {{-- <h6 class="card-subtitle mb-3">Data table example</h6> --}}
                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-bordered table-striped no-wrap">
                                <thead>
                                    <!-- start row -->
                                    <tr>
                                        <th>Banner</th>
                                        <th>Blog Title</th>
                                        <th>Slug</th>
                                        <th>Published</th>
                                        <th>Last Updated</th>
                                        <th>Action</th>
                                    </tr>
                                    <!-- end row -->
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td><img src="{{ asset('uploads/images/' . $blog->banner) }}" width="150px">
                                            </td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->slug }}</td>
                                            <td>{{ $blog->is_published }}</td>
                                            <td>{{ \Carbon\Carbon::parse($blog->updated_at)->diffForHumans() }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets_backend/libs/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets_backend/dist/js/pages/datatable/custom-datatable.js') }}"></script>
    <script src="{{ asset('assets_backend/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
@endsection
