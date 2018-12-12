@extends('layouts.charity_master')
@section('title')
Keselamatan
@endsection
@section('content')

<div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                @foreach($keselamatan as $data)
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>Kata Pengantar</h2>

                        <p>{{$data->kata_pengantar}}</p>

                        <h2>{{$data->ayat}}</h2>

                        <p>- {{$data->isi}} 
                            <br>
                            <br>
                            <br>
                            {!!$data->makna!!}

                        </p>                        
                    </div>
                </div><!-- .col -->
                @endforeach

                <div class="col-12 col-lg-7">
                    <form class="contact-form" method="POST" action="{{url('permohonandoa/post')}}">
                    	@csrf
                        <input type="text" name="nama" placeholder="Nama">
                        <input type="email" name="email" placeholder="Email">                        
                        <textarea rows="15"  name="alamat" cols="6" placeholder="Alamat"></textarea>
                        <input type="text" name="umur" placeholder="Umur">                        
                        <textarea rows="15"  name="isi_doa" cols="6" placeholder="Isi Doa"></textarea>

                        <span>
                            <button class="btn gradient-bg" type="submit">Request Doa Anda</button>
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->                
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

@endsection