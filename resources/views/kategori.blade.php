<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
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
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('style/./assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('style/./assets/img/favicon.png') }}">
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
                            Pages
                            <img src="{{ asset('style/./assets/img/down-arrow-white.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-block d-none">
                            <img src="{{ asset('style/./assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-none d-block">
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                            Sections
                            <img src="{{ asset('style/./assets/img/down-arrow-white.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-block d-none">
                            <img src="{{ asset('style/./assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                class="arrow ms-auto ms-md-2 d-lg-none d-block">
                        </a>
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
                        <h1 class="text-white">Kategori Influencer</h1>
                        <p class="text-white">Berikut kategori influencer yang dapat dipilih sesuai kebutuhan influencer anda</p>
                    </div>
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
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <div class="container">
            <section id="influencer-categories" class="section influencer-category mb-30px mb-lg-70px">
                <div class="container">

                    <div class="row mb-30px">
                        <div class="col-12 text-center"><h3>Kategori Influencer</h4></div>
                    </div>

                    <div class="d-flex flex-wrap justify-content-between">
                            <a class="btn btn-outline-primary" href="#">
                                <span class="btn-inner--icon mr-1">
                                    <i class="fa fa-film"></i>
                                </span>
                                <span class="">Entertainment</span>
                            </a>
                            <a class="btn btn-outline-primary" href="#">
                                <span class="btn-inner--icon mr-1">
                                    <i class="fa fa-dumbbell"></i>
                                </span>
                                <span class="">Health &amp; Sport</span>
                            </a>
                            <a class="btn btn-outline-primary" href="#">
                                <span class="btn-inner--icon mr-1">
                                    <i class="fa fa-plane"></i>
                                </span>
                                <span class="">Lifestyle &amp; Travel</span>
                            </a>
                            <a class="btn btn-outline-primary" href="#">
                                <span class="btn-inner--icon mr-1">
                                    <i class="fa fa-robot"></i>
                                </span>
                                <span class="">Technology</span>
                            </a>
                            <a class="btn btn-outline-primary" href="#">
                                <span class="btn-inner--icon mr-1">
                                    <i class="fa fa-baby"></i>
                                </span>
                                <span class="">Family &amp; Parenting</span>
                            </a>
                            <a class="btn btn-outline-primary" href="#">
                                <span class="btn-inner--icon mr-1">
                                    <i class="fa fa-hamburger"></i>
                                </span>
                                <span class="">Food &amp; Beverages</span>
                            </a>
                            <a class="btn btn-outline-primary" href="#">
                                <span class="btn-inner--icon mr-1">
                                    <i class="fa fa-tshirt"></i>
                                </span>
                                <span class="">Beauty &amp; Fashion</span>
                            </a>
                            <a class="btn btn-outline-primary" href="/kategori-gaming">
                                <span class="btn-inner--icon mr-1">
                                    <i class="fa fa-gamepad"></i>
                                </span>
                                <span class="">Gaming</span>
                            </a>
                        </div>

                </div>
            </section>
            <section id="influencer-region" class="section influencer-region mb-30px mb-lg-70px">

                <div class="container pb-30px">

                    <div class="row justify-space-between text-center py-2 mb-30px">
                        <div class="col-12 text-center"><h4>Cari Berdasarkan Daerah</h4></div>
                    </div>

                    <div class="d-flex flex-wrap justify-content-between">
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/11/aceh">Aceh</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/12/sumatra-utara">Sumatra Utara</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/13/sumatra-barat">Sumatra Barat</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/14/riau">Riau</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/15/jambi">Jambi</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/16/sumatra-selatan">Sumatra Selatan</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/17/bengkulu">Bengkulu</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/18/lampung">Lampung</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/19/kepulauan-bangka-belitung">Kepulauan Bangka Belitung</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/21/kepulauan-riau">Kepulauan Riau</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/31/dki-jakarta">DKI Jakarta</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/32/jawa-barat">Jawa Barat</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/33/jawa-tengah">Jawa Tengah</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/34/di-yogyakarta">DI Yogyakarta</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/35/jawa-timur">Jawa Timur</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/36/banten">Banten</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/51/bali">Bali</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/52/nusa-tenggara-barat">Nusa Tenggara Barat</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/53/nusa-tenggara-timur">Nusa Tenggara Timur</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/61/kalimantan-barat">Kalimantan Barat</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/62/kalimantan-tengah">Kalimantan Tengah</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/63/kalimantan-selatan">Kalimantan Selatan</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/64/kalimantan-timur">Kalimantan Timur</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/65/kalimantan-utara">Kalimantan Utara</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/71/sulawesi-utara">Sulawesi Utara</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/72/sulawesi-tengah">Sulawesi Tengah</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/73/sulawesi-selatan">Sulawesi Selatan</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/74/sulawesi-tenggara">Sulawesi Tenggara</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/75/gorontalo">Gorontalo</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/76/sulawesi-barat">Sulawesi Barat</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/81/maluku">Maluku</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/82/maluku-utara">Maluku Utara</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/91/papua-barat">Papua Barat</a>
                                            <a class="btn btn-outline-secondary" href="https://www.allstars.id/influencer/region/94/papua">Papua</a>
                                    </div>

                </div>

                <div class="region-trigger d-lg-none">
                    <div class="row">
                        <div class="col-12">
                            <a class="text-torch-red jsExpandRegion" href="#"><i class="fa fa-chevron-down"></i>&nbsp;Lihat Semua</a>
                        </div>
                    </div>
                </div>

                </section>
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
                    <div>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">
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
                                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
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

    <script src="{{ asset('style/./assets/js/mk_charts.js') }}" type="text/javascript"></script>
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
