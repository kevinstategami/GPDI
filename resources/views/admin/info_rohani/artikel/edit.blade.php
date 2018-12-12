@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Ringkasan Khotbah</h3>
								</div>
								<form action="{{ url('dashboard/artikel/update') }}" method="POST" enctype="multipart/form-data">
									@csrf
								<div class="panel-body">													
									<h3 class="panel-title">Cover</h3>									
									<div class="input-group">
										<img class="col-sm-4" src="{{asset('gambar/'.$edit->cover)}}"></img>																			
										<input class="form-control" type="file" name="cover" style="padding-bottom:5%;">
									</div>
									<br>
									<h3 class="panel-title">Judul</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" value="{{$edit->judul}}" type="text" name="judul" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<h3 class="panel-title">Ayat</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" value="{{$edit->ayat}}" type="text" name="ayat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<h3 class="panel-title">Isi</h3>
									<div class="input-group">										
										<textarea class="form-control" id="ckeditor" name="isi" rows="4" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">{{$edit->isi}}</textarea>
									</div>
									<br>
									<h3 class="panel-title">Pembawa</h3>
									<select class="form-control" name="id_pembawa">										
										<option value="{{$edit->id_pembawa}}">{{$edit->pembawa->name}}</option>										
										<option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>										
									</select>
									<br>																	
									<input type="hidden" name="id" value="{{$edit->id}}">
									<button type="submit" class="btn btn-primary">Tambah Data</button>																
								</form>								
								</div>							
							</div>
@endsection