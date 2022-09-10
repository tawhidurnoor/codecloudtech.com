<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="app-url" content="{{ getBaseURL() }}">
<meta name="file-base-url" content="{{ getFileBaseURL() }}">

<meta name="description" content="{{ getMetaDescription() }}" />
<meta name="keywords" content="{{ getMetaKeywords() }}">
<meta property="og:image" content="{{ URL::asset('uploads/images/' . getMetaImage()) }}" />
