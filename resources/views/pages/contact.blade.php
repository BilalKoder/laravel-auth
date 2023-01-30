@extends('layouts.front')

@section('content')

        <!--page header section start-->
        <section class="page-header-section ptb-100 gradient-overly-right" style="background: url('assets/img/hero-14.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-6">
                        <div class="page-header-content text-white">
                            <h1 class="text-white mb-2">Contact Us</h1>
                            <p class="lead">Enthusiastically provide access to multidisciplinary communities and reliable quality vectors. Globally administrate robust.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--breadcrumb bar start-->
        <div class="breadcrumb-bar py-3 gray-light-bg border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0 pl-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb bar end-->

        <!--contact us promo-section start-->
        <!--contact us promo-section start-->
        <section class="contact-us-promo pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-mobile icon-sm color-primary"></span>
                                </div>
                                <div>
                                    <h5 class="mb-0">Call Us</h5>
                                    <p class="text-muted mb-0">+123 456-78900</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-location-pin icon-sm color-primary"></span>
                                </div>
                                <div>
                                    <h5 class="mb-0">Visit Us</h5>
                                    <p class="text-muted mb-0">New York, CA N310</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-email icon-sm color-primary"></span>
                                </div>
                                <div>
                                    <h5 class="mb-0">Mail Us</h5>
                                    <p class="text-muted mb-0">help@yourdomain.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-headphone-alt icon-sm color-primary"></span>
                                </div>
                                <div>
                                    <h5 class="mb-0">Live Chat</h5>
                                    <p class="text-muted mb-0">Chat with Us 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us promo-section end-->
        <!--contact us promo-section end-->

        <!--contact us section start-->
        <section class="contact-us-section ptb-100">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-12 px-5 pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-us-form gray-light-bg rounded p-5">
                            <h4>Ready to get started?</h4>
                            <form action="#" method="POST" id="contactForm" class="contact-us-form mt-3" novalidate="true">
                                <input type="hidden" name="csrfToken" id="csrfToken" value="58f594f20700ec7cf4f08d635631729a898c687b7fa583ff79a05dd27a782e6b">
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" class="btn primary-solid-btn disabled" id="btnContactUs" style="pointer-events: all; cursor: pointer;">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-us-content">
                            <h2>Looking for a excellent Business idea?</h2>
                            <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                            <a href="#" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                            <hr class="my-5">

                            <h5>Our Headquarters</h5>
                            <address>
                                100 Yellow House, Mn <br>
                                Factory, United State, 13420
                            </address>
                            <br>
                            <span>Phone: +1234567890123</span> <br>
                            <span>Email: <a href="mailto:email@yourdomain.com" class="link-color">email@yourdomain.com</a></span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

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
                        <div class="owl-carousel owl-theme client-testimonial custom-dot dot-bottom-center owl-loaded owl-drag">
                            
                            
                            
                            
                            
                            
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1520px, 0px, 0px); transition: all 0.25s ease 0s; width: 4560px;"><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
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
                            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial and review section end-->

    
@endsection