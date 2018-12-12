@extends('layouts.header')
@section('title')
Home
@endsection
@section('content')

    <div class="home_slider_container">
            
            <!-- Home Slider -->

            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="slider_background container"><img src="{{asset('gambar/ss1.jpeg')}}"></img></div>                    
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="slider_background container"><img src="{{asset('gambar/ss2.jpeg')}}"></img></div>                                        
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="slider_background container"><img src="{{asset('gambar/ss3.jpeg')}}"></img></div>                                        
                </div>                

            </div>

            <div class="home_slider_nav home_slider_prev d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_l.png" alt=""></div>
            <div class="home_slider_nav home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>
            
    </div>

@endsection