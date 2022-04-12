<!doctype html>
<html lang="en">

<head>
    <title>Detail Account - Influencer Analytics</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- Material Kit CSS -->
    <link href="{{ asset('style/assets/css/material-kit.css?v=3.0.0') }}" rel="stylesheet" />
</head>

<body>

    <!-- Navbar Transparent -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
        <div class="container">
            <a class="navbar-brand  text-white " href="https://demos.creative-tim.com/material-kit/presentation"
                rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                Influencer Analytics
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
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                            Influencer
                            <img src="{{ asset('style/./assets/img/down-arrow-white.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-block d-none">
                            <img src="{{ asset('style/./assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                            aria-labelledby="dropdownMenuPages">
                            <div class="d-none d-lg-block">
                                <a href="{{ asset('style/./pages/about-us.html') }}"
                                    class="dropdown-item border-radius-md">
                                    <span>Search Influencer By Personality</span>
                                </a>
                                <a href="{{ asset('style/./pages/contact-us.html') }}"
                                    class="dropdown-item border-radius-md">
                                    <span>Search Influencer By Social Media</span>
                                </a>
                                <a href="{{ asset('style/./pages/contact-us.html') }}"
                                    class="dropdown-item border-radius-md">
                                    <span>Search Influencer By All Catagories</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                            Buyer Persona
                            <img src="{{ asset('style/./assets/img/down-arrow-white.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-block d-none">
                            <img src="{{ asset('style/./assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                            aria-labelledby="dropdownMenuPages">
                            <div class="d-none d-lg-block">
                                <a href="{{ asset('style/./pages/about-us.html') }}"
                                    class="dropdown-item border-radius-md">
                                    <span>Search Buyer Persona</span>
                                </a>
                                <a href="{{ asset('style/./pages/contact-us.html') }}"
                                    class="dropdown-item border-radius-md">
                                    <span>Trend Product All Catagories</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons opacity-6 me-2 text-md">article</i>
                            Docs
                            <img src="{{ asset('style/./assets/img/down-arrow-white.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-block d-none">
                            <img src="{{ asset('style/./assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                            aria-labelledby="dropdownMenuPages">
                            <div class="d-none d-lg-block">
                                <a href="{{ asset('style/./pages/about-us.html') }}"
                                    class="dropdown-item border-radius-md">
                                    <span>Documentation About This App</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">
                        <a href="{{ asset('style/pages/sign-in.html') }}"
                            class="btn btn-sm  bg-gradient-primary mb-0 me-1 mt-2 mt-md-0">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <div class="page-header min-vh-80"
        style="background-image: url('https://images.unsplash.com/photo-1630752708689-02c8636b9141?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2490&q=80')">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="text-center">
                        <h1 class="text-white">Detail Account</h1>
                        <h3 class="text-white">Influencer & Buyer Persona</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <div class="container">
            <div class="row text-center py-3 mt-3">
                <div class="col-12">
                    <a href="javascript:;" class="avatar avatar-xxl rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('style/./assets/img/team-4.jpg') }}">
                    </a>
                </div>
            </div>

            <h4 class="text-center mt-4">Testing moni</h4>
            <div class="mt-2 mb-2 text-center">
                <img class="w-10 "
                    src="{{ asset('style/./assets/img/logos/gray-logos/logo-facebook.svg') }}" alt="Logo">
                <img class="w-2 opacity-6 "
                    src="{{ asset('style/./assets/img/logos/gray-logos/logo-instagram.svg') }}" alt="Logo">
                <img class="w-2 opacity-6 " src="{{ asset('style/./assets/img/logos/gray-logos/logo-twitter.svg') }}"
                    alt="Logo">
                <img class="w-2 opacity-6 " src="{{ asset('style/./assets/img/logos/gray-logos/logo-tiktok.svg') }}"
                    alt="Logo">
            </div>
            <div class="row text-center py-3 mt-3">
                <div class="col-12">
                    <span class="badge bg-gradient-success mb-4">
                        <div class="d-flex align-items-center">
                            <i class="material-icons me-2" aria-hidden="true">people</i>54 K
                            Followers
                        </div>
                    </span>
                    <span class="badge bg-gradient-danger mb-4">
                        <div class="d-flex align-items-center">
                            <i class="material-icons me-2" aria-hidden="true">favorite</i>101.564
                        </div>
                    </span>
                    <span class="badge bg-gradient-info mb-4">
                        <div class="d-flex align-items-center">
                            <i class="material-icons me-2" aria-hidden="true">verified</i>Artist
                        </div>
                    </span>
                    <span class="badge bg-gradient-warning mb-4">
                        <div class="d-flex align-items-center">
                            <i class="material-icons me-2" aria-hidden="true">grade</i>Influencer
                        </div>
                    </span>
                </div>
                <div class="text-center">
                    <span class="badge bg-gradient-primary mb-4">
                        <div class="d-flex align-items-center">
                            <i class="material-icons me-2" aria-hidden="true">done_all</i>Recomended
                        </div>
                    </span>
                </div>

            </div>
            <div class="row mt-4 mb-5">
                <div class="col-6">
                    <div class="card shadow-xl mx-3 mx-md-4 mt-n3 ">
                        <div class="card-header bg-primary">
                            <div class="d-flex align-items-right ">
                                <h4 class="text-white">Sentiment Analysis</h4>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row  mt-4">
                                <div class="col-6 mx-auto">
                                    <label for="">Sentiment Positif</label>
                                    <div class="mb-3" id="count-stats">
                                        <h4 class=" text-gradient text-primary"><span id="state1"
                                                countTo="4735">0</span>+
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="">Sentiment Negatif</label>
                                    <div class="mb-3" id="count-stats">
                                        <h4 class=" text-gradient text-primary"><span id="state2"
                                                countTo="200">0</span>+
                                        </h4>
                                    </div>
                                </div>
                                <div>
                                    <h6>
                                        Kategori
                                    </h6>
                                    <hr>
                                </div>
                                <div class="col-12 text-center mt-2 mb-3">
                                    <span class="badge bg-gradient-primary mb-2">Sport</span>
                                    <span class="badge bg-gradient-primary mb-2">Kuliner</span>
                                    <span class="badge bg-gradient-primary mb-2">Streamer</span>
                                    <span class="badge bg-gradient-primary mb-2">Traveling</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card shadow-xl mx-3 mx-md-4 mt-n3">
                        <div class="card-header bg-primary">
                            <div class="d-flex align-items-right ">
                                <h4 class="text-white">Sentiment Analysis</h4>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row  mt-2">
                                <div class="col-6">
                                    <h6>Personality</h6>
                                </div>
                                <div class="col-6">
                                    <h6>Interest</h6>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="">Adventure</label>
                                    <div class="progress progress-striped activemb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 56%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="">Travel</label>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 56%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="">Extrovert</label>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="">Shows</label>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 21%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="">Sportive</label>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="">Talk</label>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 82%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="">Attentive</label>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="">Art</label>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    href="https://www.creative-tim.com/knowledge-center/terms-of-service/"
                                    target="_blank">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="https://www.creative-tim.com/knowledge-center/privacy-policy/"
                                    target="_blank">
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

</body>
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
<script>
    // Set the width to animate the progress bar
    // Along with time duration in milliseconds
    $(".progress-bar").animate({
        width: "70%",
    }, 2500);
</script>

</html>
