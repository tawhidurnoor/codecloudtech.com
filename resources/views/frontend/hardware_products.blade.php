@extends('frontend.layouts.full.mainlayout')

@section('meta')
    <meta name="keywords" content="{{ getMetaKeywords() }}">
    <meta property="og:image" content="{{ URL::asset('uploads/images/' . getMetaImage()) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact | {{ getSettings('website_name') }}" />
    <meta property="og:description" content="{{ getMetaDescription() }}" />
@endsection

@section('styles')
    <style>
        .icon-control {
            margin-top: 5px;
            float: right;
            font-size: 80%;
        }



        .btn-light {
            background-color: #fff;
            border-color: #e4e4e4;
        }

        .list-menu {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }

        .list-menu a {
            color: #343a40;
        }

        .card-product-grid .info-wrap {
            overflow: hidden;
            padding: 18px 20px;
        }

        [class*='card-product'] a.title {
            color: #212529;
            display: block;
        }

        .card-product-grid:hover .btn-overlay {
            opacity: 1;
        }

        .card-product-grid .btn-overlay {
            -webkit-transition: .5s;
            transition: .5s;
            opacity: 0;
            left: 0;
            bottom: 0;
            color: #fff;
            width: 100%;
            padding: 5px 0;
            text-align: center;
            position: absolute;
            background: rgba(0, 0, 0, 0.5);
        }

        .img-wrap {
            overflow: hidden;
            position: relative;
        }
    </style>
@endsection

@section('title')
    <title>Contact | {{ getSettings('website_name') }}</title>
@endsection

@section('body')
    <section class="services-details-area ptb-100">
        <div class="container" style="margin-top: 25px">
            <div class="row">
                <aside class="col-md-3">

                    <div class="card">

                        {{-- <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true"
                                    class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Price range </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_3" style="">
                                <div class="card-body">
                                    <input type="range" class="custom-range" min="0" max="100" name="">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Min</label>
                                            <input class="form-control" placeholder="$0" type="number">
                                        </div>
                                        <div class="form-group text-right col-md-6">
                                            <label>Max</label>
                                            <input class="form-control" placeholder="$1,0000" type="number">
                                        </div>
                                    </div> <!-- form-row.// -->
                                    <button class="btn btn-block btn-primary">Apply</button>
                                </div><!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group .// --> --}}

                    </div> <!-- card.// -->

                </aside>
                <main class="col-md-9">

                    <div class="row">
                        @foreach ($hardware_products as $hardware_product)
                            <div class="col-md-4">
                                <figure class="card card-product-grid">
                                    <div class="img-wrap">
                                        <span class="badge badge-danger"> NEW </span>
                                        <img src="{{ asset('uploads/images/' . $hardware_product->image) }}" height="150px"
                                            class="img-fluid">
                                    </div> <!-- img-wrap.// -->
                                    <figcaption class="info-wrap">
                                        <div class="fix-height">
                                            <a href="#" class="title">{{ $hardware_product->title }}</a>
                                            <div class="price-wrap mt-2">
                                                <span class="price">{{ $hardware_product->price }} taka</span>
                                            </div> <!-- price-wrap.// -->
                                        </div>
                                        <a href="{{ route('slug.details', $hardware_product->slug) }}"
                                            class="btn btn-block btn-primary">View Details</a>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                        @endforeach
                    </div> <!-- row end.// -->


                    {{-- <nav class="mt-4" aria-label="Page navigation sample">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav> --}}

                </main>
            </div>
        </div>
    </section>
@endsection
