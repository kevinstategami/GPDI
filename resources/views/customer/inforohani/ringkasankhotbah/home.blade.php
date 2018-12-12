@extends('layouts.charity_master')
@section('title')
Ringkasan Khotbah
@endsection
@section('content')

 <div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="coL-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Ringkasan Khotbah</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slider">
                        <div class="swiper-wrapper">

                        	@foreach($ringkasan as $data)
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{asset('gambar/'.$data->cover)}}" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="{{url('info_rohani/ringkasankhotbah/show', $data->id)}}" class="btn gradient-bg mr-2">Read More</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="{{url('info_rohani/ringkasankhotbah/show', $data->id)}}">{{$data->judul}}</a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">{!!substr($data->isi,0,100)!!}...</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-content">
                                            <p class="m-0">{{$data->ayat}}<br>
                                                            {{$data->created_at}}
                                                        
                                            </p>
                                        </div><!-- .entry-content -->
                                                                                                                               
                                                <div class="fund-raised-total mt-4">
                                                    Dibawakan Oleh : {{$data->pembawa->name}}<br> Dibuat Oleh : {{$data->pembuat}}
                                                </div><!-- .fund-raised-total -->                                                                                                                                                                                  
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                            @endforeach                            
                        </div><!-- .swiper-wrapper -->

                    </div><!-- .swiper-container -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->


@endsection