<div class="navbar-area">
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img data-cfsrc="{{ asset('uploads/images/' . getSettings('logo_dark')) }}" alt="logo"
                style="display:none;visibility:hidden;" /><noscript><img
                    src="{{ asset('uploads/images/' . getSettings('logo_dark')) }}" alt="logo" /></noscript>
        </a>
    </div>
    <div class="main-nav">
        <div class="container">
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
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="nav-right">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control search" placeholder="Search..." />
                        </div>
                        <button type="submit">
                            <i class="bx bx-search"></i>
                        </button>
                    </form>
                </div> --}}
                <div class="nav-btn">
                    <a href="/services" class="box-btn">Get Started</a>
                </div>
            </nav>
        </div>
    </div>
</div>
