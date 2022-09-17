<style>
    .nav-item {
        margin-right: 15px;
        margin-left: 15px;
    }
</style>

<style>
    .main-nav nav .navbar-nav .nav-item {
        padding: 0px 0px 0px 0px !important;
    }
</style>

<style>
    .navbar-area {
        box-shadow: 1px 6px 20px 1px rgba(0, 0, 0, 0.72);
        -webkit-box-shadow: 1px 6px 20px 1px rgba(0, 0, 0, 0.72);
        -moz-box-shadow: 1px 6px 20px 1px rgba(0, 0, 0, 0.72);
    }
</style>
<div class="navbar-area">
    <div class="mobile-nav">
        <a href="{{ route('index') }}" class="logo">
            <img data-cfsrc="{{ asset('uploads/images/' . getSettings('logo_dark')) }}" alt="logo"
                style="display:none;visibility:hidden;" /><noscript><img
                    src="{{ asset('uploads/images/' . getSettings('logo_dark')) }}" alt="logo" /></noscript>
        </a>
    </div>
    <div class="main-nav">
        <div class="container d-flex justify-content-around">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav text-left">

                        <li class="nav-item">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    <script type="text/javascript" style="display:none">
                                        //<![CDATA[
                                        window.__mirage2 = {
                                            petok: "ba344a321c135ff00f5b89431d43414a050761e9-1652165618-1800"
                                        };
                                        //]]>
                                    </script>

                                    <img data-cfsrc="{{ asset('uploads/images/' . getSettings('logo_dark')) }}"
                                        alt="logo" style="display:none;visibility:hidden;" /><noscript><img
                                            src="{{ asset('uploads/images/' . getSettings('logo_dark')) }}"
                                            alt="logo" /></noscript>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item" style="padding-top: 20px !important;">
                            <a href="{{ route('index') }}" class="nav-link active">Home</a>
                        </li>

                        {{-- <li class="nav-item" style="padding-top: 20px !important;">
                            <a href="#" class="nav-link dropdown-toggle">Services</a>
                            <ul class="dropdown-menu">
                                @foreach (getServices() as $service)
                                    <li class="nav-item">
                                        <a href="{{ route('slug.details', $service->slug) }}"
                                            class="nav-link">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                                <li class="nav-item">
                                    <a href="{{ route('service.index') }}" class="nav-link">All Services</a>
                                </li>
                            </ul>
                        </li> --}}


                        @foreach (getServiceGroups() as $serviceGroup)
                            <li class="nav-item" style="padding-top: 20px !important;">
                                <a href="#" class="nav-link dropdown-toggle">{{ $serviceGroup->name }}</a>
                                <ul class="dropdown-menu">
                                    @foreach (getServicesByServiceGroup($serviceGroup->id) as $service_list)
                                        <li class="nav-item">
                                            <a href="{{ route('slug.details', $service_list->slug) }}"
                                                class="nav-link">{{ $service_list->title }}</a>
                                        </li>
                                    @endforeach
                                    <li class="nav-item">
                                        <a href="{{ route('service.index') }}" class="nav-link">All Services</a>
                                    </li>
                                </ul>
                            </li>
                        @endforeach

                        <li class="nav-item" style="padding-top: 20px !important;">
                            <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
                        </li>

                        <li class="nav-item" style="padding-top: 20px !important;">
                            <a href="/about" class="nav-link">About</a>
                        </li>

                        <li class="nav-item" style="padding-top: 20px !important;">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>

                    </ul>
                </div>
                {{-- <div class="nav-btn">
                    <a href="{{ route('contact') }}" class="box-btn">Contact</a>
                </div> --}}
            </nav>
        </div>
    </div>
</div>
