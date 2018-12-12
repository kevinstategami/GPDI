<html>
<head>
	<title>GPDI | @yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Invest project">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('thecharity/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('thecharity/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('thecharity/css/elegant-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('thecharity/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('thecharity/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('thecharity/css/dropdown.css') }}">
    <link rel="stylesheet" href="{{ asset('thecharity/style.css') }}">    
</head>
<body class="single-page elements-page">
    <header class="site-header">
        <div class="top-header-bar" style="background-color:#0080EF;">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">contact@ourcharity.com</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>PHONE: <span>+24 3772 120 091 / +56452 4567</span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="#">Donate Now</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="{{url('/')}}" rel="home"><img class="d-block" style="width:21%;" src="{{asset('gambar/GPDI_logo.png')}}" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center" id="parent_dropdown">                                                                 
                                   <li class="current-menu-item"><a href="{{url('/')}}">Beranda</a></li>                                   
                                   <li>
                                        <a href="{{url('jadwalibadah')}}">Jadwal Ibadah</a>
                                    </li>                                    
                                    <li>
                                        <a href="{{url('gallery')}}">Gallery</a>
                                    </li>                                    
                                    <li>
                                        <a href="{{url('wadah')}}">Wadah</a>                                        
                                    </li>                                                                                                            
                                    <li class="position-relative dropdown_button"><a href="javascript:void(0);">Info Rohani</a>
                                        <ul class="mydropdown">
                                            <li><a href=" {{url('info_rohani/ringkasankhotbah')}} ">Ringkasan Khotbah</a></li>
                                            <li><a href="{{url('info_rohani/artikel')}}">Artikel Rohani</a></li>
                                        </ul>
                                    </li>
                                    <li class="position-relative dropdown_button"><a href="javascript:void(0);">Interaktif</a>
                                        <ul class="mydropdown">
                                            <li><a href=" {{url('permohonandoa')}} ">Permohonan Doa</a></li>
                                            <li><a href=" {{url('keselamatan')}}">Keselamatan</a></li>
                                            <li><a href=" {{url('pengakuan')}} ">Pengakuan Iman</a></li>
                                        </ul>
                                    </li>
                                    <li class="position-relative dropdown_button"><a href="javascript:void(0);">Multimedia</a>
                                        <ul class="mydropdown">
                                            <li><a href="http://alkitab.me/">Artikel Online</a></li>
                                            <li><a href="https://www.alkitabsuara.com/">Alkitab Suara</a></li>
                                        </ul>
                                    </li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header>
        @yield('content')
        <div style="height: 96px"></div>

        <?php

            $footer = \App\Footer::all();

        ?>
    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
            @foreach($footer as $data)
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="foot-about">
                            <h2><img src="" alt="About Us"></h2>

                            <p>{!!$data->isi!!}</p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->
                                      

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <font size="2%">{!!$data->contact!!}</font>

                       <!-- <ul>
                                <li><i class="fa fa-phone"></i><span>+45 677 8993000 223</span></li>
                                <li><i class="fa fa-envelope"></i><span>office@template.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
                            </ul> -->
                        </div><!-- .foot-contact -->


                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
                @endforeach
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script src="{{ asset('thecharity/js/jquery.js') }}"></script>
	<script src="{{ asset('thecharity/js/dropdown.js') }}"></script>
    <script src="{{ asset('thecharity/js/jquery.collapsible.min.js') }}"></script>
    <script src="{{ asset('thecharity/js/swiper.min.js') }}"></script>
    <script src="{{ asset('thecharity/js/jquery.countdown.min.js') }}"></script>
    <script src='{{ asset("thecharity/js/circle-progress.min.js") }}'></script>
    <script src="{{ asset('thecharity/js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('thecharity/js/jquery.barfiller.js') }}"></script>
	<script src="{{ asset('thecharity/js/custom.js') }}"></script>    
</body>
</html>