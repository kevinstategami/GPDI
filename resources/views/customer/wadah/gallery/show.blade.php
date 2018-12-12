@extends('layouts.charity_master')
@section('title')
Wadah Show
@endsection
@section('content')

<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Gallery</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="portfolio-wrap">
        <div class="container">
            <div class="row portfolio-container">                
            	@foreach($gallery as $data)
                <div class="col-12 col-md-6 col-lg-4 portfolio-item">
                    <div class="portfolio-cont">
                        <img src="{{asset('gambar/'.$data->gambar)}}" alt="No Photo">                        
                    </div>
                </div>
                @endforeach                                                    
            </div>
        </div>
    </div>

@endsection