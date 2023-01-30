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
                        <a id="homeMegaMenu" class="nav-link custom-nav-link" href="#home-section" aria-haspopup="true" aria-expanded="false">Home</a>
                    </li>
                    <!--home end-->

                    <!--pages start-->
                    <li class="nav-item hs-has-sub-menu custom-nav-item">
                        <a id="pagesMegaMenu" class="nav-link custom-nav-link" href="#pricing-section" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pricing</a>
                    </li>
                    <!--pages end-->


                    <!--hosting start-->
                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px" data-position="right">
                        <a id="hostingMegaMenu" class="nav-link custom-nav-link" href="#faq" aria-haspopup="true" aria-expanded="false">Documentation</a>
                    </li>
                    <!--hosting end-->


                    <!--support start-->
                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="360px" data-position="right">
                        <a id="supportMegaMenu" class="nav-link custom-nav-link" href="#features" aria-haspopup="true" aria-expanded="false">About Us</a>
                    </li>
                    <!--support end-->

                    <!--about start-->
                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="250px" data-position="right">
                        <a id="aboutMegaMenu" class="nav-link custom-nav-link" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                    </li>
                    <!--about end-->

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