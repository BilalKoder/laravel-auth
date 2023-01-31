@extends('layouts.front')

@section('content')
<!--hero section start-->
   <section class="hero-equal-height ptb-100" id="home-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-12">
                <div class="hero-content-wrap mt-lg-5 mt-md-5">
                    <h1>For Unique Domain Search!</h1>
                    <p class="lead">Searching for that perfect domain? Progressively benchmark turnkey innovation after quality channels.</p>
                </div>
                <div class="action-btns mt-4">
                                <a href="{{ route('login') }}" class="btn primary-solid-btn  animated-btn mr-3">Get
                                    Started Now</a>
                                <a href="#pricing" class="btn outline-btn   animated-btn">See Price Plan</a>
                            </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="hero-image">
                    <img src="assets/img/data-center.svg" alt="wp hosting" class="hero-shape-img" />
                </div>
            </div>
        </div>
    </div>
    <svg id="promo-shape" class="promo-bg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 411.47" preserveAspectRatio="xMinYMin meet">
        <path d="M0,411.47V117.94s.35-1.06.53-1.59Q4,106.5,12.08,101.86l91.32-52.7,9.91-5.72L183.75,2.78c5.6-4.16,16.32-3,16.25-.76l-.07,12.78V411.47Z" style="fill: #f5f5f5"></path>
    </svg>
</section>
<!--hero section end-->

<!--promo-section section start-->
<section class="feature-promo-seciton ptb-100 " >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5 mb-sm-5 mb-md-3 mb-lg-3">
                    <h2>Most Powerful Website Hosting</h2>
                    <p class="lead">Globally seize extensive channels through go forward strategic theme areas.
                        Dramatically aggregate quality.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                    <img src="assets/img/icon-shared-hosting.svg" alt="shared hosting" class="img-fluid mb-3" width="45">
                    <div class="service-plane-content">
                        <h3 class="h5">Shared Hosting</h3>
                        <p>Our most popular product! Shared Web Hosting gives you a free domain name, fast SSD
                            storage hosting.</p>
                    </div>
                    <div class="action-wrap mt-3">
                        <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                    <img src="assets/img/icon-wordpress-hosting.svg" alt="shared hosting" class="img-fluid mb-3" width="45">
                    <div class="service-plane-content">
                        <h3 class="h5">WordPress Hosting</h3>
                        <p>Get up and running fast with WordPress. Optimized for performance for easy
                            maintenance.</p>
                    </div>
                    <div class="action-wrap mt-3">
                        <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                    <img src="assets/img/icon-vps-hosting.svg" alt="shared hosting" class="img-fluid mb-3" width="45">
                    <div class="service-plane-content">
                        <h3 class="h5">VPS Hosting</h3>
                        <p>Virtual Private Servers with ultra-fast SSDs and flexibility with HTTP/2, Ubuntu, IPv6,
                            Nginx and more.</p>
                    </div>
                    <div class="action-wrap mt-3">
                        <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--promo-section section end-->

<!--faq section start-->
<div id="faq" class="ptb-100 white-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading mb-5">
                    <h2>Frequently Asked Queries</h2>
                    <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize
                        frictionless expertise whereas tactical relationships. Still have questions? <a href="#contact" class="page-scroll">Contact us</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div id="accordion-one" class="accordion accordion-faq">
                    <div class="card mb-0">
                        <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                            <h6 class="mb-0 d-inline-block">What is Web Hosting?
                            </h6>
                        </a>
                        <div id="collapseOne" class="collapse" data-parent="#accordion-one">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident.
                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic
                                    synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <a class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                            <h6 class="mb-0 d-inline-block">What Are the
                                Different Types of Web Hosting Products DreamHost Offers?</h6>
                        </a>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                            <div class="card-body">
                                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                    raw denim aesthetic
                                    synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <a class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                            <h6 class="mb-0 d-inline-block">How Do I Buy a Domain
                                Name?
                            </h6>
                        </a>
                        <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident.
                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic
                                    synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                            <h6 class="mb-0 d-inline-block">Can You Help Me
                                Understand More About WordPress?
                            </h6>
                        </a>
                        <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident.
                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--faq section end-->


@endsection