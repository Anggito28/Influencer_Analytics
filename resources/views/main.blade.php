<!--
=========================================================
* Material Kit 2 - v3.0.0
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('style/./assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('style/./assets/img/favicon.png') }}">
    <title>
        Influencer Analytics & Buyer Persona
    </title>
    {{-- {{ asset('style/') }} --}}
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('style/./assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('style/./assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('style/./assets/css/material-kit.css?v=3.0.0') }}" rel="stylesheet" />
</head>

<body class="presentation-page bg-gray-200">
    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand font-weight-bolder ms-sm-3"
                            href="https://demos.creative-tim.com/material-kit/index" rel="tooltip"
                            title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                            Infuencer Analyst
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                                        Pages
                                        <img src="{{ asset('style/./assets/img/down-arrow-dark.svg') }}"
                                            alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                        aria-labelledby="dropdownMenuPages">
                                        <div class="d-none d-lg-block">
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                Landing Pages
                                            </h6>
                                            <a href="{{ asset('style/./pages/about-us.html') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>About Us</span>
                                            </a>
                                            <a href="{{ asset('style/./pages/contact-us.html') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Contact Us</span>
                                            </a>
                                            <a href="{{ asset('style/./pages/author.html') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Author</span>
                                            </a>
                                        </div>
                                    </div>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                                        Sections
                                        <img src="{{ asset('style/./assets/img/down-arrow-dark.svg') }}"
                                            alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    </a>
                                </li>

                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">article</i>
                                        Docs
                                        <img src="{{ asset('style/./assets/img/down-arrow-dark.svg') }}"
                                            alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    </a>
                                </li>
                                <li class="nav-item my-auto ms-3 ms-lg-0">
                                    <a href="{{ asset('style/pages/sign-in.html') }}"
                                        class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Sign In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <header class="header-2">
        <div class="page-header min-vh-75 relative"
            style="background-image: url('{{ asset('style/./assets/img/influencer2.jpg') }}')">
            <span class="mask bg-gradient-primary opacity-4"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Influencer Analytics</h1>
                        <p class="lead text-white mt-3">Search Your Influencer to Promote Your Product<br />
                            Make Your Best Influencer in All Social Mdia</p>
                    </div>
                    <div class="row justify-space-between py-2">
                        <div class="col-lg-6 mx-auto">
                            <div class="input-group input-group-dynamic mb-4 text-white text-center">
                                <span class="input-group-text"><i class="fas fa-search text-white"
                                        aria-hidden="true"></i></span>
                                <input class="form-control text-white" placeholder="Search" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <section class="pt-3 pb-4" id="count-stats">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto py-3">
                        <div class="row">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary"><span id="state1" countTo="4500">0</span>+
                                    </h1>
                                    <h5 class="mt-3">Influencer</h5>
                                    <p class="text-sm font-weight-normal">Indonesian Have many good influencer on the
                                        world</p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary"> <span id="state2" countTo="250">0</span>+
                                    </h1>
                                    <h5 class="mt-3">Company</h5>
                                    <p class="text-sm font-weight-normal">get relationship with any influencer</p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary"><span id="state3" countTo="350">0</span>+
                                    </h1>
                                    <h5 class="mt-3">Relation Success</h5>
                                    <p class="text-sm font-weight-normal">
                                        a lot of success on the collaboration between companies and influencers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                        <div class="rotating-card-container">
                            <div
                                class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                                <div class="front front-background"
                                    style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                                    <div class="card-body py-7 text-center">
                                        <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white">Feel the <br /> Best Influencer</h3>
                                        <p class="text-white opacity-8">Providing the best service in finding the right
                                            influencer</p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                    style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Make Relationship</h3>
                                        <p class="text-white opacity-8">
                                            You can make long-term partnerships with the best influencers you find to
                                            promote your product
                                        </p>
                                        <a href="{{ asset('style/pages/sign-in.html') }}" target="_blank"
                                            class="btn btn-white btn-sm w-50 mx-auto mt-3">Start
                                            Analysis</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ms-auto">
                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                                    <h5 class="font-weight-bolder mt-3">All Influencer in Indonesian</h5>
                                    <p class="pe-5">We have provided all the best influencers in Indonesia
                                        here based on the rating value</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
                                    <h5 class="font-weight-bolder mt-3">Easy Analysis</h5>
                                    <p class="pe-3">You don't need to be complicated in finding the right
                                        influencer for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start mt-5">
                            <div class="col-md-6 mt-3">
                                <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
                                <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
                                <p class="pe-5">You can search for it in a short time and at a low cost</p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="info">
                                    <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                                    <h5 class="font-weight-bolder mt-3">Can All Device</h5>
                                    <p class="pe-3">You can start this app in every where and with any device
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="row justify-content-center text-center my-sm-5">
                        <div class="col-lg-6">
                            <span class="badge bg-primary mb-3">Example Influencer Social Media</span>
                            <h2 class="text-dark mb-0">Influencer Data Collection</h2>
                            <p class="lead">We have search all influencer in all social media like twitter,
                                tiktok, instagram, and facebook</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-sm-5 mt-3">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Instagram</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">Have 450+ influencer in Instagram by
                                sentiment analytics and buyer persona</h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-4 mt-md-0">
                                <a href="{{ asset('style/./sections/page-sections/hero-sections.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/headers.jpg"
                                            alt="hero">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Johan Lasmi</h6>
                                        <p class="text-secondary text-sm">10 Promote the Product</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ url('detailAkun') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/features.jpg"
                                            alt="features">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Andika Mestra</h6>
                                        <p class="text-secondary text-sm">14 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            {{-- <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg> --}}
                                        </div>
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/pricing.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" "
                                            alt=" pricing">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Wegah Wesari</h6>
                                        <p class="text-secondary text-sm">8 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/faq.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="faq">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Alisansyah</h6>
                                        <p class="text-secondary text-sm">1 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/blogs.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="blog posts">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Putri barsari</h6>
                                        <p class="text-secondary text-sm">11 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/testimonials.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="testimonials">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Angina Fermasina</h6>
                                        <p class="text-secondary text-sm">11 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/teams.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="teams">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Putri babasari</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/stats.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="stats">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Kalik Febriansyah</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/call-to-action.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="CTA">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Putinga Hadiningsih</h6>
                                        <p class="text-secondary text-sm">8 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/projects.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="applications">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Ali Hamsyah</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/logo-area.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="logo areas">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Indra Kusuma</h6>
                                        <p class="text-secondary text-sm">4 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/footers.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="footers">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Febri Andika</h6>
                                        <p class="text-secondary text-sm">10 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/general-cards.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="general cards">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Esa Wahyuni</h6>
                                        <p class="text-secondary text-sm">9 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/content-sections.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="content sections">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Kabira Modila</h6>
                                        <p class="text-secondary text-sm">8 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-lg-6">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Tiktok</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">We have 320+ influencer in tiktok media,
                                by sentiment analytics and buyer persona with rating value</h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="{{ asset('style/./sections/navigation/navbars.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 m-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/navbars.jpg"
                                            alt="navbars">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Andika Lesmana</h6>
                                        <p class="text-secondary text-sm">4 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ asset('style/./sections/navigation/nav-tabs.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 m-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/nav-tabs.jpg"
                                            alt="navtabs">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Puput Babasari</h6>
                                        <p class="text-secondary text-sm">2 Nav Tabs</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ asset('style/./sections/navigation/pagination.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 m-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/pagination.jpg"
                                            alt="pagination">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Angelina Sondah</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-lg-6">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Twitter</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">We Have 700+ Influencer in twitter
                                media, by search with sentiment analytics and </h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/newsletters.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="newsletter">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Laberal Gamma</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 m-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/contact-sections.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="contact sections">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Konsina</h6>
                                        <p class="text-secondary text-sm">8 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ asset('style/./sections/input-areas/forms.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 m-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/forms.jpg"
                                            alt="forms">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Dirallaba</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="{{ asset('style/./sections/input-areas/inputs.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/inputs.jpg"
                                            alt="inputs">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Benimaru</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-lg-6">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Facebook</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">We have 120+ data about influencer in
                                facebook social media, we get it from sentiment analysis and buyer persona </h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="{{ asset('style/./sections/attention-catchers/alerts.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/alerts.jpg"
                                            alt="alerts">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Sela Herdianti</h6>
                                        <p class="text-secondary text-sm">4 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/toasts.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="notifications">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Abraham Linkon</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ asset('style/./sections/attention-catchers/tooltips-popovers.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/popovers.jpg"
                                            alt="tooltip_popover">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Abimanyu Setiawan</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="{{ asset('style/./sections/attention-catchers/modals.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/modals.jpg"
                                            alt="modals">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Edi Mulyadi</h6>
                                        <p class="text-secondary text-sm">5 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Elements</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">80+ carefully crafted small elements
                                that come with multiple colors and shapes</h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="{{ asset('style/./sections/elements/buttons.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/buttons.jpg"
                                            alt="buttons">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Buttons</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ asset('style/./sections/elements/avatars.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/avatars.jpg"
                                            alt="avatars">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Avatars</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ asset('style/./sections/elements/dropdowns.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/dropdowns.jpg"
                                            alt="dropdowns">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Dropdowns</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="{{ asset('style/./sections/elements/toggles.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/switch.jpg"
                                            alt="toggles">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Toggles</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/social-buttons.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="social buttons">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Social Buttons</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/button-groups.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="button groups">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Button Groups</h6>
                                        <p class="text-secondary text-sm">5 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="{{ asset('style/./sections/elements/breadcrumbs.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/breadcrumbs.jpg"
                                            alt="breadcrumbs">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Breadcrumbs</h6>
                                        <p class="text-secondary text-sm">1 Example</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ asset('style/./sections/elements/badges.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/badges.jpg"
                                            alt="badges">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Badges</h6>
                                        <p class="text-secondary text-sm">3 Example</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ asset('style/./sections/elements/progress-bars.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/progress.jpg"
                                            alt="progress">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Progress Bars</h6>
                                        <p class="text-secondary text-sm">4 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)"
                                                        fill="#FFFFFF" fill-rule="nonzero">
                                                        <path
                                                            d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/tables.jpg"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element"
                                            alt="tables">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Tables</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="{{ asset('style/./sections/elements/typography.html') }}">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/typography.jpg"
                                            alt="typography">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Typography</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="row text-center my-sm-5 mt-5">
                        <div class="col-lg-6 mx-auto">
                            <span class="badge bg-primary mb-3">Boost Analytics </span>
                            <h2 class="">All Platform Social Media</h2>
                            <p class="lead">We work with 4 social media platforms to classify influencers
                                based on sentiment analysis and buyer persona</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <a href="{{ asset('style/./pages/about-us.html') }}">
                                    <div class="card move-on-hover">
                                        <img class="w-100"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/about-us.jpg"
                                            alt="aboutus">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Instagram</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-5">
                                <a href="{{ asset('style/./pages/contact-us.html') }}">
                                    <div class="card move-on-hover">
                                        <img class="w-100"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/contact-us.jpg"
                                            alt="contacus">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Facebook</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 mt-md-3 mt-6">
                                <a href="{{ asset('style/./pages/sign-in.html') }}">
                                    <div class="card move-on-hover">
                                        <img class="w-100"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/sign-in.jpg"
                                            alt="signin">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Tik Tok</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 mt-md-3 mt-6">
                                <a href="{{ asset('style/./pages/author.html') }}">
                                    <div class="card move-on-hover">
                                        <img class="w-100"
                                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/author.jpg"
                                            alt="author">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Twitter</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto mt-md-0 mt-5">
                        <div class="position-sticky" style="top:100px !important">
                            <h4 class="">Presentation Pages for Company, Author and Contact
                            </h4>
                            <h6 class="text-secondary font-weight-normal">These is just a small selection of the
                                multiple possibitilies you have. Focus on the business</h6>
                        </div>
                    </div>
                </div>
        </section>
        <!-- -------- START Content Presentation Docs ------- -->
        <div class="container mt-sm-5">
            <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl"
                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');"
                loading="lazy">
                <span class="mask bg-gradient-dark"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ms-lg-5">
                            <h4 class="text-white">Built by developers</h4>
                            <h1 class="text-white">Complex Documentation</h1>
                            <p class="lead text-white opacity-8">
                                all procedures for using the application are contained in the manual book, the manual
                                book can be downloaded on the available platforms by clicking the read more sign below
                            </p>
                            <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit"
                                class="text-white icon-move-right">
                                Read docs
                                <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
                        <i class="material-icons text-white text-3xl">flag</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                            <h5 class="text-white">Getting Started</h5>
                            <p class="text-white">Check the possible ways of working with our product and the
                                necessary files for building your own project.</p>
                            <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit"
                                class="text-white icon-move-right">
                                Let's start
                                <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
                        <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                            <h5>Buyer Persona</h5>
                            <p>You can check the current demand trend for your product.</p>
                            <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit"
                                class="text-primary icon-move-right">
                                Read more
                                <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
                        <i class="material-icons text-gradient text-primary text-3xl">receipt_long</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                            <h5>How to relationship with influencer</h5>
                            <p>
                                You can find out how to collaborate with influencers</p>
                            <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit"
                                class="text-primary icon-move-right">
                                Read more
                                <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------- END Content Presentation Docs ------- -->
        <section class="py-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto text-center">
                        <h2 class="mb-0">Trusted by over</h2>
                        <h2 class="text-gradient text-primary mb-3">1,679,477+ Influencer</h2>
                        <p class="lead">There are many influencers in the world who are iconic for a product
                            to be marketed</p>
                    </div>
                </div>
                <div class="row mt-6">
                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 1 day ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">"This is an excellent product, the documentation is excellent
                                    and helped me get things done more efficiently."</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 ms-md-auto">
                        <div class="card bg-gradient-primary">
                            <div class="card-body">
                                <div class="author align-items-center">
                                    <div class="name">
                                        <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                                        <div class="stats text-white">
                                            <i class="far fa-clock"></i> 1 week ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-white">"banyak hal yang saya dapatkan dari menggunakan website ini
                                    sehingga saya dapat dengan mudah mempromosikan produk saya dan mendapat outfit yang
                                    banyak dari hasil promosi influencer yang saya dapat di web ini"</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 3 weeks ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">"Sungguh luar biasa web ini sehingga saya dapat tahu mana
                                    influencer yang cocok untuk menjadi iconic perusahaan saya dan perusahaan saya
                                    untung besar!!"</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="horizontal dark my-5">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 ms-auto">
                        <img class="w-100 opacity-6"
                            src="{{ asset('style/./assets/img/logos/gray-logos/logo-apple.svg') }}" alt="Logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <img class="w-100 opacity-6"
                            src="{{ asset('style/./assets/img/logos/gray-logos/logo-facebook.svg') }}" alt="Logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <img class="w-100 opacity-6"
                            src="{{ asset('style/./assets/img/logos/gray-logos/logo-nasa.svg') }}" alt="Logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
                        <img class="w-100 opacity-6"
                            src="{{ asset('style/./assets/img/logos/gray-logos/logo-vodafone.svg') }}" alt="Logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
                        <img class="w-100 opacity-6"
                            src="{{ asset('style/./assets/img/logos/gray-logos/logo-digitalocean.svg') }}"
                            alt="Logo">
                    </div>
                </div>
            </div>
        </section>
        <section class="py-sm-7" id="download-soft-ui">
            <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
                <img src="{{ asset('style/./assets/img/shapes/waves-white.svg') }}" alt="pattern-lines"
                    class="position-absolute start-0 top-md-0 w-100 opacity-2">
                <div class="container py-7 postion-relative z-index-2 position-relative">
                    <div class="row">
                        <div class="col-md-7 mx-auto text-center">
                            <h3 class="text-white mb-0">Do you love this awesome</h3>
                            <h3 class="text-white">Influencer Analytics</h3>
                            <p class="text-white mb-5">if you do something new, you definitely need supporters, for
                                example you can find out the trend of a product that is currently rife from a buyer
                                persona and you can also get influencers who can support you in selling and promoting
                                your product.</p>
                            <a href="https://www.creative-tim.com/product/material-kit"
                                class="btn btn-primary btn-lg mb-3 mb-sm-0">Getting Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <div class="text-center">
                            <h3 class="mt-5 mb-4">Available on these technologies</h3>
                            <div class="row justify-content-center">
                                <div class="col-lg-2 col-4">
                                    <a href="https://www.creative-tim.com/product/soft-ui-design-system"
                                        target="_blank">
                                        <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/bootstrap5.jpg"
                                            class="img-fluid" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Bootstrap 5 - Most popular front-end component library">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="javascript:;">
                                        <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/icon-tailwind.jpg"
                                            class="img-fluid opacity-6" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Comming soon">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="javascript:;">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg"
                                            class="img-fluid opacity-6" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Comming soon">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="javascript:;">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg"
                                            class="img-fluid opacity-6" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Comming soon">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="javascript:;">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg"
                                            class="img-fluid opacity-6" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Comming soon">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="javascript:;" target="_blank">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg"
                                            class="img-fluid opacity-6" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Comming soon">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12 my-auto">
                        <h3 class="text-gradient text-primary mb-0">You liked it and</h3>
                        <h3>Want more?</h3>
                        <p class="pe-md-5 mb-4">
                            Most complex and innovative Design System Made by <a href="https://creative-tim.com/"
                                target="_blank">Creative Tim </a> . Check our latest Premium Bootstrap 5 UI Kit.
                            Designed for those who like bold elements and beautiful websites. Made of hundred of
                            elements, designed blocks and fully coded pages, Material Kit is ready to help you create
                            stunning websites and webapps.
                        </p>
                        <div class="github-buttons">
                            <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2"
                                target="_blank" class="btn bg-gradient-primary mb-5 mb-sm-0">Upgrade to Pro</a>
                            <div class="github-button">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 my-auto">
                        <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2">
                            <img class="w-100 border-radius-lg shadow-lg"
                                src="https://s3.amazonaws.com/creativetim_bucket/products/46/original/material-kit-pro.jpg?1632843641"
                                alt="Product Image">
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 ms-auto">
                        <h4 class="mb-1">Thank you for your support!</h4>
                        <p class="lead mb-0">We deliver the best web products</p>
                    </div>
                    <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
                        <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit"
                            class="btn btn-twitter mb-0 me-2" target="_blank">
                            <i class="fab fa-twitter me-1"></i> Tweet
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit"
                            class="btn btn-facebook mb-0 me-2" target="_blank">
                            <i class="fab fa-facebook-square me-1"></i> Share
                        </a>
                        <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit"
                            class="btn btn-pinterest mb-0 me-2" target="_blank">
                            <i class="fab fa-pinterest me-1"></i> Pin it
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    </div>
    <footer class="footer pt-5 mt-5">
        <div class="container">
            <div class=" row">
                <div class="col-md-3 mb-4 ms-auto">
                    <div>
                        <a href="https://www.creative-tim.com/product/material-kit">
                            <img src="{{ asset('style/./assets/img/logo-ct-dark.png') }}" class="mb-3 footer-logo"
                                alt="main_logo">
                        </a>
                        <h6 class="font-weight-bolder mb-4">Influencer Analytics</h6>
                    </div>
                    <div>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                                    <i class="fab fa-facebook text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                    <i class="fab fa-twitter text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                    <i class="fab fa-dribbble text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://github.com/creativetimofficial"
                                    target="_blank">
                                    <i class="fab fa-github text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1"
                                    href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                                    <i class="fab fa-youtube text-lg opacity-8"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Company</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/presentation"
                                    target="_blank">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/templates/free"
                                    target="_blank">
                                    Freebies
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/templates/premium"
                                    target="_blank">
                                    Premium Tools
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Resources</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                                    Illustrations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                                    Bits & Snippets
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/affiliates/new"
                                    target="_blank">
                                    Affiliate Program
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Help & Support</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/contact-us"
                                    target="_blank">
                                    Contact Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center"
                                    target="_blank">
                                    Knowledge Center
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer"
                                    target="_blank">
                                    Custom Development
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/sponsorships"
                                    target="_blank">
                                    Sponsorships
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                    <div>
                        <h6 class="text-sm">Legal</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="https://www.creative-tim.com/knowledge-center/terms-of-service"
                                    target="_blank">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                                    Licenses (EULA)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-dark my-4 text-sm font-weight-normal">
                            All rights reserved. Copyright ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Material Kit by <a href="https://www.creative-tim.com"
                                target="_blank">Creative Tim</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="{{ asset('style/./assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('style/./assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="{{ asset('style/./assets/js/plugins/countup.min.js') }}"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="{{ asset('style/./assets/js/plugins/rellax.min.js') }}"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="{{ asset('style/./assets/js/plugins/tilt.min.js') }}"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="{{ asset('style/./assets/js/plugins/choices.min.js') }}"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="{{ asset('style/./assets/js/plugins/parallax.min.js') }}"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="{{ asset('style/./assets/js/material-kit.min.js?v=3.0.0" type="text/javascript') }}"></script>
    <script type="text/javascript">
        if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
                countUp1.start();
            } else {
                console.error(countUp1.error);
            }
        }
        if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
                countUp2.start();
            } else {
                console.error(countUp2.error);
            };
        }
    </script>
</body>

</html>
