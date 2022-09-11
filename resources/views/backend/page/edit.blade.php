@extends('backend.layouts.full.mainlayout')

@section('title')
    <title>Edit Page | CodeCloud Technology CMS</title>
@endsection

@section('styles')
    <link href="{{ asset('assets_backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets_backend/ajax/libs/codemirror/5.41.0/codemirror.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_backend/ajax/libs/codemirror/5.41.0/theme/blackboard.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_backend/ajax/libs/codemirror/5.41.0/theme/monokai.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets_backend/extra-libs/summernote/summernote-lite.min.css') }}" />
@endsection

@section('page-title')
    Edit Page
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
                        <h4 class="card-title mb-0">Page details</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.page.update', $page->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label>Page Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $page->title }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label>Page Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" value="{{ $page->meta_title }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="5" required>{{ $page->meta_description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Keywords
                                    <span class="help"> Separate with coma</span>
                                </label>
                                <input type="text" name="keywords" value="{{ $page->keywords }}" class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label>Page Content</label>
                                <textarea id="editor" name="content">{{ $page->content }}</textarea>
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

    {{-- <script src="{{ asset('assets_backend/extra-libs/summernote/summernote-lite.min.js') }}"></script>
    <script>
        /************************************/
        //default editor
        /************************************/
        $(".summernote").summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
        });

        /************************************/
        //inline-editor
        /************************************/
        $(".inline-editor").summernote({
            airMode: true,
        });

        /************************************/
        //edit and save mode
        /************************************/
        (window.edit = function() {
            $(".click2edit").summernote();
        }),
        (window.save = function() {
            $(".click2edit").summernote("destroy");
        });

        var edit = function() {
            $(".click2edit").summernote({
                focus: true
            });
        };

        var save = function() {
            var markup = $(".click2edit").summernote("code");
            $(".click2edit").summernote("destroy");
        };

        /************************************/
        //airmode editor
        /************************************/
        $(".airmode-summer").summernote({
            airMode: true,
        });
    </script> --}}

    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
