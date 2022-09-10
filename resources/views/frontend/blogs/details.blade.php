@extends('frontend.layouts.full.mainlayout')

@section('styles')
@endsection

@section('title')
    <title>{{ $blog->title }} | Code CLoud Technology</title>
@endsection

@section('body')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $blog->title }}</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>Blog</li>
                    <li class="active">{{ $blog->title }}</li>
                </ul>
            </div>
        </div>
        <div class="page-shape">
            <div class="shape1">
                <img data-cfsrc="{{ asset('assets_frontend/images/shape/1.png') }}" alt="shape"
                    style="display:none;visibility:hidden;" /><noscript><img
                        src="{{ asset('assets_frontend/images/shape/1.png') }}" alt="shape" /></noscript>
            </div>
            <div class="shape3">
                <img data-cfsrc="{{ asset('assets_frontend/images/shape/3.png') }}" alt="shape"
                    style="display:none;visibility:hidden;" /><noscript><img
                        src="{{ asset('assets_frontend/images/shape/3.png') }}" alt="shape" /></noscript>
            </div>
            <div class="shape4">
                <img data-cfsrc="{{ asset('assets_frontend/images/shape/4.png') }}" alt="shape"
                    style="display:none;visibility:hidden;" /><noscript><img
                        src="{{ asset('assets_frontend/images/shape/4.png') }}" alt="shape" /></noscript>
            </div>
            <div class="shape5">
                <img data-cfsrc="{{ asset('assets_frontend/images/shape/5.png') }}" alt="shape"
                    style="display:none;visibility:hidden;" /><noscript><img
                        src="{{ asset('assets_frontend/images/shape/5.png') }}" alt="shape" /></noscript>
            </div>
            <div class="shape6">
                <img data-cfsrc="{{ asset('assets_frontend/images/shape/6.png') }}" alt="shape"
                    style="display:none;visibility:hidden;" /><noscript><img
                        src="{{ asset('assets_frontend/images/shape/6.png') }}" alt="shape" /></noscript>
            </div>
        </div>
    </div>


    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img data-cfsrc="{{ asset('uploads/images/' . $blog->banner) }}" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('uploads/images/' . $blog->banner) }}" alt="image"></noscript>
                        </div>
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Posted On:</span> <a
                                            href="#">{{ \Carbon\Carbon::parse($blog->updated_at)->diffForHumans() }}</a>
                                    </li>
                                    <li><span>Posted By:</span> <a href="#">Admin</a></li>
                                </ul>
                            </div>
                            {!! $blog->content !!}
                        </div>
                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class='bx bx-share-alt'></i></span>
                                <a href="#">Share</a>
                            </div>
                            <div class="article-share">
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
