@extends('frontend.layouts.full.mainlayout')

@section('styles')
@endsection

@section('title')
    <title>{{ $page->title }} | Code CLoud Technology</title>
@endsection

@section('body')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $page->title }}</h2>
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


    <section class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
