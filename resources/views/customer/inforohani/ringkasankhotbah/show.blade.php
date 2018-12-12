@extends('layouts.charity_master')
@section('title')
Ringkasan Lengkap
@endsection
@section('content')

<div class="welcome-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2>{{$show->judul}}</h2>
                        </header><!-- .entry-header -->

                        <div>
                            <p>{!!$show->isi!!}</p>
                        </div><!-- .entry-content -->
                    
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <img src="{{asset('gambar/'.$show->cover)}}" style="width:100%" alt="cover">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
@endsection