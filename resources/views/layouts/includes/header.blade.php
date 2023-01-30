<div id="logoAndNav" class="main-header-menu-wrap white-bg border-bottom">
    <div class="container">
        <nav class="js-mega-menu navbar navbar-expand-md header-nav">

            <!--logo start-->
            <a class="navbar-brand" href="index.html"><img src="assets/img/logo-color.png" width="120" alt="logo" class="img-fluid" /></a>
            <!--logo end-->

            <!--responsive toggle button start-->
            <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                <span id="hamburgerTrigger">
                  <span class="fas fa-bars"></span>
                </span>
            </button>
            <!--responsive toggle button end-->

            <!--main menu start-->
            <div id="navBar" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto main-navbar-nav">
                    <!--home start-->
                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
                        <a id="homeMegaMenu" class="nav-link custom-nav-link" href="{{ url('/') }}" aria-haspopup="true" aria-expanded="false">Home</a>
                    </li>
                    <!--home end-->

                    
                    <!--support start-->
                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="360px" data-position="right">
                        <a id="supportMegaMenu" class="nav-link custom-nav-link" href="{{ route('about-us') }}" aria-haspopup="true" aria-expanded="false">About Us</a>
                    </li>
                    <!--support end-->


                    <!--pages start-->
                    <li class="nav-item hs-has-sub-menu custom-nav-item">
                        <a id="pagesMegaMenu" class="nav-link custom-nav-link" href="{{ route('pricing') }}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pricing</a>
                    </li>
                    <!--pages end-->


                    <!--hosting start-->
                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px" data-position="right">
                        <a id="hostingMegaMenu" class="nav-link custom-nav-link" href="{{ route('documentation') }}" aria-haspopup="true" aria-expanded="false">Documentation</a>
                    </li>
                    <!--hosting end-->



                    <li class="nav-item hs-has-mega-menu custom-nav-item hs-mega-menu-opened " data-max-width="250px" data-position="right">
                    <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="{{ route('contact-us') }}" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                                <!--about submenu start-->
                                <div class="hs-mega-menu main-sub-menu animated hs-position-right" aria-labelledby="aboutMegaMenu" style="min-width: 330px; max-width: 250px; display: block;">

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('terms-and-conditions')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{URL::asset('assets/img/chat-mobile.svg')}}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Terms & conditions </span>
                                                    <small class="u-header__promo-text">Here you can read our Terms & conditions
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('privacy-policy')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{URL::asset('assets/img/blog.svg')}}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Privacy Policy</span>
                                                    <small class="u-header__promo-text">Here you can read our privacy policy
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                </div>
                                <!--about submenu end-->
                            </li>

                    <!--button start-->
                    <li class="nav-item header-nav-last-item d-flex align-items-center">
                        <a class="btn primary-solid-btn animated-btn" href="{{ route('login') }}" target="_blank">
                            Get Started
                        </a>
                    </li>
                    <!--button end-->
                </ul>
            </div>
            <!--main menu end-->
        </nav>
    </div>
</div>