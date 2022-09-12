@extends('frontend.layouts.full.mainlayout')

@section('styles')
    <style>
        .banner-area .banner-content h1 {
            color: #fff;
            margin: 0 0 0px;
        }

        .banner-area .banner-content h2 {
            font-size: 45px;
        }
    </style>
@endsection

@section('title')
    <title>Code CLoud Technology</title>
@endsection

@section('body')
    <section class="banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <h1>
                                    A Custom Software Development Company
                                </h1>
                                <h2>for Your Business Growth</h2>
                                <p>
                                    Since our inception in 2012, Codecloud Technology has been Delivering Software
                                    Development and related IT services in the world. And slowly established as one of the
                                    top-class Software Development companies in the world market.
                                </p>
                                <div class="banner-btn">
                                    <a href="/about" class="box-btn border-btn">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-img">
                                <img data-cfsrc="assets_frontend/images/home-bg-1-img.png" alt="banner-img"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="assets_frontend/images/home-bg-1-img.png" alt="banner-img" /></noscript>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-shape">
            <div class="shape1">
                <img data-cfsrc="assets_frontend/images/shape/1.png" alt="shape"
                    style="display:none;visibility:hidden;"><noscript><img src="assets_frontend/images/shape/1.png"
                        alt="shape"></noscript>
            </div>
            <div class="shape2">
                <img data-cfsrc="assets_frontend/images/shape/2.png" alt="shape"
                    style="display:none;visibility:hidden;"><noscript><img src="assets_frontend/images/shape/2.png"
                        alt="shape"></noscript>
            </div>
            <div class="shape3">
                <img data-cfsrc="assets_frontend/images/shape/3.png" alt="shape"
                    style="display:none;visibility:hidden;"><noscript><img src="assets_frontend/images/shape/3.png"
                        alt="shape"></noscript>
            </div>
            <div class="shape4">
                <img data-cfsrc="assets_frontend/images/shape/4.png" alt="shape"
                    style="display:none;visibility:hidden;"><noscript><img src="assets_frontend/images/shape/4.png"
                        alt="shape"></noscript>
            </div>
            <div class="shape5">
                <img data-cfsrc="assets_frontend/images/shape/5.png" alt="shape"
                    style="display:none;visibility:hidden;"><noscript><img src="assets_frontend/images/shape/5.png"
                        alt="shape"></noscript>
            </div>
            <div class="shape6">
                <img data-cfsrc="assets_frontend/images/shape/6.png" alt="shape"
                    style="display:none;visibility:hidden;"><noscript><img src="assets_frontend/images/shape/6.png"
                        alt="shape"></noscript>
            </div>
        </div>
    </section>


    <section id="home-service-area" class="home-service-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our Services and Solutions</span>
                <h2>What Do You Need? </h2>
                <p>We use an Iterative Agile Software & Web Development Process with Strategically Planned Development
                    Cycles that Adapt to Customer's Changing Needs. We Specialized in Manufacturing Customized Software
                    Solutions & Development service.
                </p>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-service">
                            <div class="service-img">
                                <img data-cfsrc="{{ asset('uploads/images/' . $service->icon) }}" alt="service"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="{{ asset('uploads/images/' . $service->icon) }}" alt="service" /></noscript>
                            </div>
                            <div class="service-content">
                                <h3>{{ $service->title }}
                                </h3>
                                <p>
                                    {!! Str::limit($service->short_description, 100) !!}
                                </p>
                                <a href="{{ route('slug.details', $service->slug) }}" class="line-bnt">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="home-process-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>How We Work?</h2>
                <h3>In our process we always focus on quality, testing and want to deliver good product & service on time.
                </h3>

                <p>Our team works tirelessly till we are able to convert our clients' visions into reality. We offer service
                    assurance as well as a re-do option. We'll make changes to your work until you're fully happy as client
                    satisfaction is our satisfaction.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process">
                        <div class="icon">
                            <img data-cfsrc="assets_frontend/images/process/p1.png" alt="process"
                                style="display:none;visibility:hidden;" /><noscript><img
                                    src="assets_frontend/images/process/p1.png" alt="process" /></noscript>
                            <span>
                                <img data-cfsrc="assets_frontend/images/process/next.png" alt="shape"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="assets_frontend/images/process/next.png" alt="shape" /></noscript>
                            </span>
                        </div>
                        <div class="content">
                            <h3>Analysis</h3>
                            <p>
                                First, we understand the goal of your Product or Service. We have to know your requirements,
                                brand and business identity to discover an ideal strategy for your success.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process">
                        <div class="icon">
                            <img data-cfsrc="assets_frontend/images/process/p2.png" alt="process"
                                style="display:none;visibility:hidden;" /><noscript><img
                                    src="assets_frontend/images/process/p2.png" alt="process" /></noscript>
                            <span class="pro-span">
                                <img data-cfsrc="assets_frontend/images/process/next.png" alt="shape"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="assets_frontend/images/process/next.png" alt="shape" /></noscript>
                            </span>
                        </div>
                        <div class="content">
                            <h3>Planning</h3>
                            <p>
                                Proper planning concentrates on everything needed to complete the project successfully. This
                                will assist us to figure out your requirement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process">
                        <div class="icon">
                            <img data-cfsrc="assets_frontend/images/process/p3.png" alt="process"
                                style="display:none;visibility:hidden;" /><noscript><img
                                    src="assets_frontend/images/process/p3.png" alt="process" /></noscript>
                            <span>
                                <img data-cfsrc="assets_frontend/images/process/next.png" alt="shape"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="assets_frontend/images/process/next.png" alt="shape" /></noscript>
                            </span>
                        </div>
                        <div class="content">
                            <h3>Execute & Testing</h3>
                            <p>
                                Our Expert Developers use the most up-to-date methods while they begin to develop your
                                System and Testing. The Web Aplication or Software is next tested for functionality.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process">
                        <div class="icon">
                            <img data-cfsrc="assets_frontend/images/process/p4.png" alt="process"
                                style="display:none;visibility:hidden;" /><noscript><img
                                    src="assets_frontend/images/process/p4.png" alt="process" /></noscript>
                        </div>
                        <div class="content">
                            <h3>Delivery</h3>
                            <p>
                                We deliver what we promise and are accountable for our actions. Every one of us places high
                                value on delivering the greatest levels of integrity in our work.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choose-area ptb-100">
        <div class="container">
            <div class="section-title">

                <h2>Why Choose Us</h2>
                <h3>We Achieved People’s Trust by Our Great Service</h3>
                <p> We have highly skilled developer with excellent technical knowledge and experience in using the latest
                    software standards. We have built a large pool of knowledge that we apply to deliver solutions that meet
                    client's needs, expectations and budget. By putting our clients at the heart of everything we do, we are
                    proud that we are still supporting our very first business client.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-img">
                        <img data-cfsrc="assets_frontend/images/choose-img.png" alt="choose"
                            style="display:none;visibility:hidden;" /><noscript><img
                                src="assets_frontend/images/choose-img.png" alt="choose" /></noscript>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-content">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <div class="icon">
                                        <i class="flaticon-friends"></i>
                                    </div>
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>RESEARCH &
                                        PLANNING
                                    </a>
                                    <p class="accordion-content show">
                                        Doing what has never been done before is common practice at CodeCloud Technology. We
                                        develop solutions by analyzing and synthesizing R&D (Research and Development),
                                        defining business and audience goals, establishing a clear vision and identifying
                                        success metrics. These allow our project plans to become very thorough and highly
                                        stable, with our sincere intent to quickly deliver the highest quality project
                                        within an effective cost.
                                    </p>
                                </li>
                                <li class="accordion-item">
                                    <div class="icon">
                                        <i class="flaticon-chip"></i>
                                    </div>
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>Update Technology
                                    </a>
                                    <p class="accordion-content">
                                        Our code crafters plan for progressive solutions placed on the right platforms to
                                        enhance your business's user experience. They focus on building top-quality and
                                        high-performing custom solutions and update technology that are easily scalable.
                                    </p>
                                </li>
                                <li class="accordion-item">
                                    <div class="icon">
                                        <i class="flaticon-like"></i>
                                    </div>
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>Experienced Team
                                    </a>
                                    <p class="accordion-content">
                                        Solve complex problems with digital solutions. We provide scalable software,
                                        dedicated experts, and user validated products integrating easily into your business
                                        model.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <div class="icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>Worldwide Clients
                                    </a>
                                    <p class="accordion-content">
                                        We are trusted by 100+ clients from worldwide.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <div class="icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>Support
                                    </a>
                                    <p class="accordion-content">
                                        24*7 support from our expertise to your business.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="client-area ptb-100 bg-color">
        <div class="container">
            <div class="section-title">
                <span>Testimonials</span>
                <h2>What Our Client’s Say</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A facilis vel consequatur tempora atque
                    blanditiis exercitationem incidunt, alias corporis quam assumenda dicta.</p>
            </div>
            <div class="client-wrap owl-carousel owl-theme">
                <div class="single-client">
                    <img data-cfsrc="assets_frontend/images/client/1.jpg" alt="img"
                        style="display:none;visibility:hidden;"><noscript><img src="assets_frontend/images/client/1.jpg"
                            alt="img"></noscript>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing Quis suspendisse
                        typesetting ipsum dolor sit amet,</p>
                    <h3>Steven Jony</h3>
                    <span>CEO of Company</span>
                </div>
                <div class="single-client">
                    <img data-cfsrc="assets_frontend/images/client/2.jpg" alt="img"
                        style="display:none;visibility:hidden;"><noscript><img src="assets_frontend/images/client/2.jpg"
                            alt="img"></noscript>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing Quis suspendisse
                        typesetting ipsum dolor sit amet,</p>
                    <h3>Omit Jacson</h3>
                    <span>Company Founder</span>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
