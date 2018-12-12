@extends('layouts.charity_master')
@section('title')
Wadah
@endsection
@section('content')
 <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Wadah</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->
    <div class="container">		
		            <div class="col-12">		                
		                <div class="entry-content elements-container">
		                    <div class="row">
		                        <div class="col-12 col-md-12">
		                            <div class="accordion-wrap type-accordion">
		                                <h3 class="entry-title d-flex justify-content-between align-items-center active">Kepanitiaan<span class="arrow-r"></span></h3>

		                                <div class="entry-content">
		                                    <div class="tabs">
                                        <ul class="tabs-nav d-flex">
                                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_1">Ketua</li>
                                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_2">Sekretaris</li>
                                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_3">Bendahara</li>
                                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_4">Seksi Acara</li>
                                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_5">Seksi Musik</li>
                                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_6">Seksi Konseling & Do'a</li>
                                        </ul>

                                        <div class="tabs-container">
                                            <div id="tab_1" class="tab-content">
                                                <div class="row">
                                                    <img src="{{asset('gambar/'.$show->img_ketua)}}" alt="Ketua" style="width:25%">                                                
                                                <div class="col-sm-9">                                                
                                                    <br>
                                                    <br>                                                    
                                                    <b>Nama Ketua : {{$show->ketua}}</b>
                                                </div>
                                                </div>
                                            </div>

                                            <div id="tab_2" class="tab-content">
                                                <div class="row">
                                                    <img src="{{asset('gambar/'.$show->img_sekretaris)}}" alt="Sekretaris" style="width:25%">                                                
                                                <div class="col-sm-9">                                                
                                                    <br>
                                                    <br>                                                    
                                                    <b>Nama Sekretaris : {{$show->sekretaris}}</b>
                                                </div>
                                                </div>
                                            </div>

                                            <div id="tab_3" class="tab-content">
                                                <div class="row">
                                                    <img src="{{asset('gambar/'.$show->img_bendahara)}}" alt="Bendahara" style="width:25%">                                                
                                                <div class="col-sm-9">                                                
                                                    <br>
                                                    <br>                                                    
                                                    <b>Nama Bendahara : {{$show->bendahara}}</b>
                                                </div>
                                                </div>
                                            </div>

                                            <div id="tab_4" class="tab-content">
                                                <div class="row">
                                                    <img src="{{asset('gambar/'.$show->img_acara)}}" alt="Acara" style="width:25%">                                                
                                                <div class="col-sm-9">                                                
                                                    <br>
                                                    <br>                                                    
                                                    <b>Nama Seksi Acara : {{$show->seksi_acara}}</b>
                                                </div>
                                                </div>
                                            </div>

                                            <div id="tab_5" class="tab-content">
                                                <div class="row">
                                                    <img src="{{asset('gambar/'.$show->img_musik)}}" alt="Musik" style="width:25%">                                                
                                                <div class="col-sm-9">                                                
                                                    <br>
                                                    <br>                                                    
                                                    <b>Nama Seksi Musik : {{$show->seksi_musik}}</b>
                                                </div>
                                                </div>
                                            </div>

                                            <div id="tab_6" class="tab-content">
                                                <div class="row">
                                                    <img src="{{asset('gambar/'.$show->img_konseling_doa)}}" alt="Konseling Dan Doa" style="width:25%">                                                
                                                <div class="col-sm-9">                                                
                                                    <br>
                                                    <br>                                                    
                                                    <b>Nama Seksi Konseling & Doa : {{$show->seksi_konseling_doa}}</b>
                                                </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
		                                </div>

		                                <h3 class="entry-title d-flex justify-content-between align-items-center">Jenis Wadah<span class="arrow-r"></span></h3>

		                                <div class="entry-content">
		                                    <p>{{$show->jenis}}</p>
		                                </div>

		                                <h3 class="entry-title d-flex justify-content-between align-items-center">Motto<span class="arrow-r"></span></h3>

		                                <div class="entry-content">
		                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
		                                </div>
		                            </div>
		                        </div>		                        
		                    </div>
		                </div>
		            </div>		        
        </div>
@endsection