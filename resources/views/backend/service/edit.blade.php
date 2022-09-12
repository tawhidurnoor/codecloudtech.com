@extends('backend.layouts.full.mainlayout')

@section('title')
    <title>Edit Service | CodeCloud Technology CMS</title>
@endsection

@section('styles')
    <link href="{{ asset('assets_backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets_backend/ajax/libs/codemirror/5.41.0/codemirror.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_backend/ajax/libs/codemirror/5.41.0/theme/blackboard.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_backend/ajax/libs/codemirror/5.41.0/theme/monokai.min.css') }}" />
@endsection

@section('page-title')
    Edit Service
@endsection

@section('body')
    <div class="container-fluid">
        <!-- -------------------------------------------------------------- -->
        <!-- Start Page Content -->
        <!-- -------------------------------------------------------------- -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Service details</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.service.update', $service->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label>Service Title</label>
                                <input type="text" name="title" value="{{ $service->title }}" class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" value="{{ $service->meta_title }}"
                                    class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="5" required>{{ $service->meta_description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Keywords
                                    <span class="help"> Separate with coma</span>
                                </label>
                                <input type="text" name="keywords" value="{{ $service->keywords }}" class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label>Icon</label>
                                <input type="file" name="icon" accept="image/*" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control" rows="5" required>{{ $service->short_description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Blog Content</label>
                                <textarea id="editor" name="description">{{ $service->description }}</textarea>
                            </div>



                            <br><br>
                            <button class="btn btn-success" type="submit" type="button">
                                <i class="ri-save-fill fs-5 align-middle"></i> Save
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End PAge Content -->
        <!-- -------------------------------------------------------------- -->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets_backend/libs/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets_backend/dist/js/pages/datatable/custom-datatable.js') }}"></script>
    <script src="{{ asset('assets_backend/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets_backend/libs/codemirror/5.41.0/codemirror.js') }}"></script>
    <script src="{{ asset('assets_backend/libs/codemirror/5.41.0/mode/xml/xml.min.js') }}"></script>

    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor');
    </script>

    <script>
        CKEDITOR.plugins.add('example', {
            init: function(editor) {
                var pluginDirectory = this.path;
                editor.addContentsCss(pluginDirectory + 'https://127.0.0.1:8000/assets_frontend/css/style.css');
            }
        });
    </script>
@endsection