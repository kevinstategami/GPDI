@extends('layouts.admin')
@section('admin')

							<div class="panel panel-headline">
								<div class="panel-heading">									
									<img class="col-sm-4" src="{{asset('gambar/'.$show->cover)}}"></img>								
									<h3 class="panel-title">{{$show->judul}}</h3>
									<p class="panel-subtitle">{{$show->ayat}}</p>
								</div>
								<div class="panel-body">									
									<p>{!!$show->isi!!}</p>
									<p class="panel-subtitle">dibawakan oleh : {{$show->pembawa->name}}</p>
								</div>
							</div>

@endsection
