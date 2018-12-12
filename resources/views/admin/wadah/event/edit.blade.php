@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Event Wadah</h3>
								</div>
								<form action="{{ url('dashboard/event/update') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="panel-body">													
									<h3 class="panel-title">Nama Event</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" value="{{$edit->nama}}" type="text" name="nama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<h3 class="panel-title">Tanggal</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" type="date" value="{{$edit->tanggal}}" name="tanggal" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<h3 class="panel-title">Keterangan</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<textarea class="form-control" name="keterangan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">{{$edit->nama}}</textarea>
									</div>
									<br>									
									<h3 class="panel-title">Status</h3>
									<select class="form-control" name="status">										
										<option value="Aktif">Aktif</option>										
										<option value="Tidak Aktif">Tidak Aktif</option>										
									</select><br>								
									<h3 class="panel-title">Jenis Wadah</h3>
									<select class="form-control" name="id_wadah">
										@foreach($wadah as $wadah)
										<option value="{{$wadah->id}}">{{$wadah->jenis}}</option>
										@endforeach
									</select>
									<input type="hidden" name="id" value="{{$edit->id}}">
									<button type="submit" class="btn btn-primary">Tambah Data</button>
								</form>								
								</div>							
							</div>
@endsection