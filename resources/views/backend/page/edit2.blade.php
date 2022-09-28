<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Edit {{$page->title}} Page - Code Cloud CMS</title>
        <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/keditor/plugins/bootstrap-3.4.1/css/bootstrap.min.css')}}" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/keditor/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" data-type="keditor-style" />
        <!-- Start of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/keditor/dist/css/keditor.css')}}" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/keditor/dist/css/keditor-components.css')}}" data-type="keditor-style" />
        <!-- End of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/keditor/plugins/code-prettify/src/prettify.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/keditor/css/examples.css')}}" />
    </head>
    
    <body>
        <div data-keditor="html">
            <div id="content-area"></div>
        </div>
        
        <script type="text/javascript" src="{{asset('assets_backend/keditor/plugins/jquery-1.11.3/jquery-1.11.3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets_backend/keditor/plugins/bootstrap-3.4.1/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets_backend/keditor/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets_backend/keditor/plugins/ckeditor-4.11.4/ckeditor.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets_backend/keditor/plugins/formBuilder-2.5.3/form-builder.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets_backend/keditor/plugins/formBuilder-2.5.3/form-render.min.js')}}"></script>
        <!-- Start of KEditor scripts -->
        <script type="text/javascript" src="{{asset('assets_backend/keditor/dist/js/keditor.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets_backend/keditor/dist/js/keditor-components.js')}}"></script>
        <!-- End of KEditor scripts -->
        <script type="text/javascript" src="{{asset('assets_backend/keditor/plugins/code-prettify/src/prettify.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets_backend/keditor/plugins/js-beautify-1.7.5/js/lib/beautify.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets_backend/keditor/plugins/js-beautify-1.7.5/js/lib/beautify-html.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets_backend/keditor/js/examples.js')}}"></script>
        <script type="text/javascript" data-keditor="script">
            $(function () {
                $('#content-area').keditor();
            });
        </script>
        <script>
            $(function() {
                $(document).on('click', '.fa-save', function(e) {
                    e.preventDefault();
                    console.log($('#content-area').keditor('getContent'));
                });
            });
        </script>
    </body>
</html>
