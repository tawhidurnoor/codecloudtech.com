<div class="navbar-area">
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img data-cfsrc="assets_frontend/images/logo.png" alt="logo"
                style="display:none;visibility:hidden;" /><noscript><img src="assets_frontend/images/logo.png"
                    alt="logo" /></noscript>
        </a>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav text-left">
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
