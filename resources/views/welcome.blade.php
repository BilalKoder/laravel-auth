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

<!--feature section tab style start-->
<section id="features" class="feature-tab-section ptb-100 white-bg" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature-content-wrap">
                    <ul class="nav nav-tabs feature-tab border-bottom-0 mb-5" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gray-light-bg active" href="#tab6-1" data-toggle="tab">
                                <img src="assets/img/icon-wordpress-hosting.svg" width="25" alt="wp hosting" class="mr-2" />
                                <h6 class="mb-0">Wordpress Hosting</h6>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gray-light-bg" href="#tab6-2" data-toggle="tab">
                                <img src="assets/img/icon-dadicate-hosting.svg" width="25" alt="wp hosting" class="mr-2" />
                                <h6 class="mb-0">Dedicated Hosting</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gray-light-bg" href="#tab6-3" data-toggle="tab">
                                <img src="assets/img/icon-shared-hosting.svg" width="25" alt="wp hosting" class="mr-2" />
                                <h6 class="mb-0">Shared Hosting</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content feature-tab-content">
                        <div class="tab-pane active" id="tab6-1">
                            <div class="row">
                                <div class="col-xl-4 col-lg-3 col-12 order-lg-last align-self-center">
                                    <div class="image-box fadein text-xl-right text-center">
                                        <img src="assets/img/icon-wordpress-hosting.svg" alt="wp-hosting" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-9 col-12 order-xl-first">
                                    <h3>Better support for your wordpress website</h3>
                                    <p>Progressively matrix mission-critical core competencies without magnetic
                                        paradigms. Appropriately develop flexible ROI without goal-oriented customer
                                        service. Seamlessly.</p>
                                    <div class="row pt-2">
                                        <div class="col-md-6 col-12">
                                            <h5>WordPress Optimization</h5>
                                            <ul class="disc-style">
                                                <li>Latest and Fastest PHP/MySQL version</li>
                                                <li>SSD-only cloud with guaranteed CPU</li>
                                                <li>HTTP/2 and free CloudFlare CDN</li>
                                                <li>Observer Resource Monitoring</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h5>Extra RocketBooster</h5>
                                            <ul class="disc-style">
                                                <li>Varnish Static and Dynamic caching</li>
                                                <li>LiteSpeed LSPHP Technology</li>
                                                <li>Opcode Caching</li>
                                                <li>Optimized static content processing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="action-btns mt-4">
                                        <a href="#" class="btn primary-solid-btn mr-2">Start Now</a>
                                        <a href="#" class="btn outline-btn">Pricing Plans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6-2">
                            <div class="row">
                                <div class="col-xl-4 col-lg-3 col-12 order-lg-last align-self-center">
                                    <div class="image-box fadein text-xl-right text-center">
                                        <img src="assets/img/icon-dadicate-hosting.svg" alt="wp-hosting" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-9 col-12 order-xl-first">
                                    <h3>Resource monitoring that actually matters</h3>
                                    <p>Completely streamline magnetic collaboration and idea-sharing with market
                                        positioning portals. Objectively pontificate intuitive value whereas
                                        client-centered deliverables.</p>
                                    <div class="row pt-2">
                                        <div class="col-md-6 col-12">
                                            <h5>Website Monitoring</h5>
                                            <p>See exactly how much resources your website is using to optimize
                                                performance and reduce cost scenarios pandemic mindshare.</p>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h5>Optimization Reports</h5>
                                            <p>Daily reports with detailed statistics and optimization tips to
                                                improve Rapidiously orchestrate multimedia based.</p>
                                        </div>
                                    </div>
                                    <div class="action-btns mt-4">
                                        <a href="#" class="btn primary-solid-btn mr-2">Start Now</a>
                                        <a href="#" class="btn outline-btn">Pricing Plans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6-3">
                            <div class="row">
                                <div class="col-xl-4 col-lg-3 col-12 order-lg-last align-self-center">
                                    <div class="image-box fadein text-xl-right text-center">
                                        <img src="assets/img/icon-shared-hosting.svg" alt="wp-hosting" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-9 col-12 order-xl-first">
                                    <h3>Better wordpress security</h3>
                                    <p>Efficiently reintermediate long-term high-impact channels without equity
                                        invested technology. Quickly brand backend web-readiness without
                                        cross-platform e-services.</p>
                                    <div class="row pt-2">
                                        <div class="col-md-6 col-12">
                                            <h5>Exclusive Features</h5>
                                            <ul class="disc-style">
                                                <li>Daily Backups & free backup restore</li>
                                                <li>Security Updates and Patching</li>
                                                <li>Performance and resource monitoring</li>
                                                <li>Step-by-step Tutorials & Knowledgebase</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h5>WordPress Services</h5>
                                            <ul class="disc-style">
                                                <li>1-click WordPress Installation</li>
                                                <li>Free WordPress Transfer</li>
                                                <li>Themes and plugins installation</li>
                                                <li>Malware Scan & Reports</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="action-btns mt-4">
                                        <a href="#" class="btn primary-solid-btn mr-2">Start Now</a>
                                        <a href="#" class="btn outline-btn">Pricing Plans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature section tab style end-->

<!--call to action section start-->
<section class="call-to-action ptb-100 gradient-overlay" style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="call-to-action-content text-white text-center">
                    <h2 class="text-white">Need Some Help?</h2>
                    <p class="lead mb-0">Whether you’re stuck or just want some tips on where to start, hit up our
                        experts anytime.</p>
                    <p>Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day <strong>
                        5:30AM–9:30PM PT</strong></p>
                    <div class="action-btns">
                        <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                        <a href="#" class="btn outline-white-btn">Send us an Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--call to action section end-->

<!--pricing with switch section start-->
<section class="pricing-section ptb-100" id="pricing-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>Managed Our Hosting Price</h2>
                    <p class="lead">
                        Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                        core competencies through
                        core competencies.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 col-sm-8 col-md-7">
                <div class="text-center mb-5 radio-box-wrap billingCycle">
                    <div class="single-radio-box">
                        <input name="billingPlan" id="monthly-plan" value="monthly" class="radio" type="radio" checked>
                        <label for="monthly-plan"><span class="custom-check"></span> Monthly</label>
                    </div>
                    <div class="single-radio-box">
                        <input name="billingPlan" id="yearly-plan" value="yearly" class="radio" type="radio">
                        <label for="yearly-plan"><span class="custom-check"></span> Yearly</label>
                    </div>
                    <div class="single-radio-box">
                        <input name="billingPlan" id="biannual-plan" value="biannual" class="radio" type="radio">
                        <label for="biannual-plan"><span class="custom-check"></span> Biannual</label>
                    </div>
                    <div class="single-radio-box">
                        <input name="billingPlan" id="triennial-plan" value="triennial" class="radio" type="radio">
                        <label for="triennial-plan"><span class="custom-check"></span> Triennial</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card text-center single-pricing-pack">
                    <div class="pt-5">
                        <h5 class="mb-0">Cloud Starter</h5>
                        <p class="mb-0">Medium traffic personal sites</p>
                    </div>
                    <div class="card-header pb-4 border-0 pricing-header">
                        <div class="price text-center mb-0 monthly-price">$19<span>/month</span></div>
                        <div class="price text-center mb-0 yearly-price">$69<span>/yearly</span></div>
                        <div class="price text-center mb-0 biannual-price">$130<span>/biannual</span></div>
                        <div class="price text-center mb-0 triennial-price">$199<span>/triennial</span></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-4 pricing-feature-list">
                            <li><span>10</span> Hosted Domains</li>
                            <li><span>25 GB</span> RAID 10 Storage</li>
                            <li><span>200 GB</span> Bandwidth</li>
                            <li><span>1 Free</span> Domain included</li>
                            <li><span>Super Fast</span> SSD Storage</li>
                            <li><span>Free</span> SSL Certificate</li>
                            <li>99.95% Uptime</li>
                            <li>24/7 Phone Support</li>
                        </ul>
                        <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card popular-price text-center single-pricing-pack">
                    <div class="pt-5">
                        <h5 class="mb-0">Cloud Business <span class="badge color-1 color-1-bg">Popular</span></h5>
                        <p class="mb-0">High traffic corporate sites</p>
                    </div>
                    <div class="card-header pb-4 border-0 pricing-header">
                        <div class="price text-center mb-0 monthly-price">$49<span>/month</span></div>
                        <div class="price text-center mb-0 yearly-price">$159<span>/yearly</span></div>
                        <div class="price text-center mb-0 biannual-price">$299<span>/biannual</span></div>
                        <div class="price text-center mb-0 triennial-price">$429<span>/triennial</span></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-4 pricing-feature-list">
                            <li><span>30</span> Hosted Domains</li>
                            <li><span>75 GB</span> RAID 10 Storage</li>
                            <li><span>700 GB</span> Bandwidth</li>
                            <li><span>3 Free</span> Domain included</li>
                            <li><span>Super Fast</span> SSD Storage</li>
                            <li><span>Free</span> SSL Certificate</li>
                            <li>99.95% Uptime</li>
                            <li>24/7 Phone Support</li>
                        </ul>
                        <a href="#" class="btn primary-solid-btn mb-3" target="_blank">Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card text-center single-pricing-pack">
                    <div class="pt-5">
                        <h5 class="mb-0">Cloud Enterprise</h5>
                        <p class="mb-0">Enterprise content management</p>
                    </div>
                    <div class="card-header pb-4 border-0 pricing-header">
                        <div class="price text-center mb-0 monthly-price">$69<span>/month</span></div>
                        <div class="price text-center mb-0 yearly-price">$259<span>/yearly</span></div>
                        <div class="price text-center mb-0 biannual-price">$499<span>/biannual</span></div>
                        <div class="price text-center mb-0 triennial-price">$739<span>/triennial</span></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-4 pricing-feature-list">
                            <li><span>60</span> Hosted Domains</li>
                            <li><span>175 GB</span> RAID 10 Storage</li>
                            <li><span>1500 GB</span> Bandwidth</li>
                            <li><span>6 Free</span> Domain included</li>
                            <li><span>Super Fast</span> SSD Storage</li>
                            <li><span>Free</span> SSL Certificate</li>
                            <li>99.95% Uptime</li>
                            <li>24/7 Phone Support</li>
                        </ul>
                        <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="support-cta mt-5">
                    <h5 class="mb-1 d-flex align-items-center justify-content-center"><span class="ti-loop color-primary mr-3 icon-sm"></span>Choose Your <a href="pricing-comparison.html" class="ml-2">Compare Hosting Plans</a></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--pricing with switch section end-->

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

<!--testimonial and review section start-->
<section class="client-review-section ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>What Our Customers Say About Us?</h2>
                    <p class="lead">Authoritatively reinvent client-centric fully tested process improvements. Objectively restore strategic initiatives through fully researched.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="owl-carousel owl-theme client-testimonial custom-dot dot-bottom-center">
                    <div class="item">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome Support !</h5>
                                <p>Objectively magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships imperatives through whereas process-centric.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Alex Khamer</h6>
                                <small class="text-right">6 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Pleasant support experience</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Peter Anderson</h6>
                                <small class="text-right">3 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Contacted support after Midnight</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic maximize 2.0 relationships whereas process-centric methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Jolio Darix</h6>
                                <small class="text-right">8 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Great experience with the technical</h5>
                                <p>Objectively manufactured products and dynamic models maximize 2.0 relationships whereas process-centric methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Carolyn Dani</h6>
                                <small class="text-right">6 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Reliable web hosting company</h5>
                                <p>Objectively magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Alex Dari</h6>
                                <small class="text-right">4 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>People and services that care</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models maximize 2.0 relationships whereas process-centric methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Sir Rainbo </h6>
                                <small class="text-right">2 days ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial and review section end-->

<!--call to action new style start-->
<section class="call-to-action ptb-100 gray-light-bg ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="call-to-action-box white-bg shadow-sm rounded p-5">
                    <h3>100% Uptime Guarantee</h3>
                    <p>Made possible by our multiple datacenter locations, redundant cooling, emergency generators.
                        Monotonectally drive business e-markets after distinctive functionalities.</p>
                    <a href="#" class="btn outline-btn">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="call-to-action-box white-bg shadow-sm rounded p-5">
                    <h3>24/7 365 Day Support</h3>
                    <p>Our experts are on standby for friendly, pro-level support 24/7, 365. No question is too
                        Objectively envisioneer stand-alone growth strategies whereas market.</p>
                    <div class="action-btns">
                        <a href="#" class="btn primary-solid-btn mr-2">Chat With Us</a>
                        <a href="#" class="btn outline-btn">Email Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--call to action new style end-->
@endsection