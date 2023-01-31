@extends('layouts.front')

@section('content')

        <!--page header section start-->
        <section class="page-header-section ptb-100 gradient-overly-right" style="background: url('assets/img/hero-14.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-6">
                        <div class="page-header-content text-white">
                            <h1 class="text-white mb-2">About Us</h1>
                            <p class="lead">Compellingly conceptualize ubiquitous methodologies and progressive total linkage. Credibly reconceptualize enabled models after open-source applications. </p>
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
                                <li class="list-inline-item breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb bar end-->

        <!--feature section tab style start-->
        <section class="feature-tab-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-3 col-12 order-lg-last align-self-center">
                        <div class="image-box fadein text-xl-right text-center">
                            <img src="assets/img/icon-shared-hosting.svg" alt="wp-hosting" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-12 order-xl-first">
                        <h2>We Make Sure Your Website is Fast</h2>
                        <p>Efficiently reintermediate long-term high-impact channels without equity
                            invested technology. Quickly brand backend web-readiness without
                            cross-platform e-services.</p>
                        <div class="row pt-2">
                            <div class="col-md-6 col-12">
                                <h5>Exclusive Features</h5>
                                <ul class="disc-style">
                                    <li>Daily Backups &amp; free backup restore</li>
                                    <li>Security Updates and Patching</li>
                                    <li>Performance and resource monitoring</li>
                                    <li>Step-by-step Tutorials &amp; Knowledgebase</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-12">
                                <h5>WordPress Services</h5>
                                <ul class="disc-style">
                                    <li>1-click WordPress Installation</li>
                                    <li>Free WordPress Transfer</li>
                                    <li>Themes and plugins installation</li>
                                    <li>Malware Scan &amp; Reports</li>
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
        </section>
        <!--feature section tab style end-->


@endsection