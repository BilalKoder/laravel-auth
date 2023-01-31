@extends('layouts.front')

@section('content')


        <!--breadcrumb bar start-->
        <div class="breadcrumb-bar py-3 gray-light-bg border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0 pl-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Pricing Package</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb bar end-->

        <!--pricing with switch section start-->
        <section class="pricing-section ptb-100">
            <div class="container">
                <div class="row align-items-center  justify-content-center d-flex">
                    <div class="col-lg-4 col-md-4 col-12  justify-content-center">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">One Time Setup</h5>
                                <p class="mb-0">API Pricing Plan</p>
                            </div>
                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">€19<span>/month</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>10</span> Hosted Domains</li>
                                    <li><span>25 GB</span> RAID 10 Storage</li>
                                    <li><span>200 GB</span> Bandwidth</li>
                                    <li><span>1 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing with switch section end-->

        <!--faq new style start-->
        <section class="ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-3 text-center">
                            <h2>Frequently Asked Questions</h2>
                            <p class="lead">
                                Quickly morph client-centric results through performance based applications. Proactively facilitate professional human capital for cutting-edge.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-faq pt-4">
                            <h5>How can I pay for this?</h5>
                            <p>Intrinsicly implement high standards in strategic theme areas via inexpensive solutions.
                                Assertively conceptualize prospective bandwidth whereas client-based imperatives.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-faq pt-4">
                            <h5>Is it possible to pay yearly?</h5>
                            <p>Assertively iterate user friendly innovation without open-source markets. Monotonectally extend
                                resource sucking manufactured products without high-payoff paradigms. Objectively customize
                                ubiquitous information before economically sound relationships. </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-faq pt-4">
                            <h5>Do you offer discounts on multiple items?</h5>
                            <p>Dramatically target focused testing procedures after holistic ideas. Collaboratively maximize
                                high-payoff ROI and value-added products. Distinctively deliver cooperative collaboration and
                                idea-sharing whereas customized</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-faq pt-4">
                            <h5>Is VAT included in plan prices?</h5>
                            <p>Distinctively simplify high-quality initiatives for highly efficient applications. Monotonectally
                                repurpose integrated customer service after magnetic e-services. </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-faq pt-4">
                            <h5>Will I pay more for some features?</h5>
                            <p>Enthusiastically pontificate resource-leveling supply chains whereas scalable markets.
                                Authoritatively streamline resource maximizing methods of empowerment</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-faq pt-4">
                            <h5>Why are there no limits on the number of messages?</h5>
                            <p>Assertively target turnkey ideas for market-driven portals. Appropriately e-enable world-class
                                intellectual capital whereas 2.0 mindshare.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq new style end-->

        <!--call to action section start-->
        {{-- <section id="" class="call-to-action ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="call-to-action-content text-center">
                            <h2>Already have a domain don't worry you can keep it.</h2>
                            <p>No problem! It's quick and painless to transfer your hosting, domain registrations, or both
                                to HostLar.</p>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn primary-solid-btn mr-3">Existing Customers</a>
                                <a href="#" class="btn outline-btn">New Customers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--call to action section end-->

    
@endsection