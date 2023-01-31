<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta description -->
    <meta name="description" content="Hostlar hosting template designed for all web hosting, business, multi purpose, domain sale websites, online business, personal hosting company and similar sites and many more.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--favicon icon-->
    <link rel="icon" href="{{URL::asset('assets/img/favicon.png')}}" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--title-->
    <title>Bloom - API</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">
    <!-- endbuild -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">
    <style>
        html {
        scroll-behavior: smooth;
        }

    </style>
</head>

<body>

    <!--loader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--loader end-->
    <!--header section start-->
    <header id="header" class="header-main">
        <!--topbar start-->
        {{-- @include('layouts.includes.topbar') --}}
        <!--topbar end-->

        <!--main header menu start-->
        @include('layouts.includes.header')
        <!--main header menu end-->
    </header>
    <!--header section end-->

    <div class="main">
        @yield('content')
    </div>

    <!--footer section start-->
    <footer class="footer-section">
        @include('layouts.includes.footer')
    </footer>
    <!--footer section end-->

    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-rocket"></span>
    </button>
    <!--bottom to top button end-->
    <!--build:js-->
    @include('layouts.includes.footer-scripts')
    <!--endbuild-->
</body>

</html>