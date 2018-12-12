@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Jadwal Ibadah</h3>
								</div>
								<form action="{{ url('dashboard/jadwal/update') }}" method="POST" enctype="multipart/form-data">
									@csrf
								<div class="panel-body">													
									<h3 class="panel-title">Kegiatan</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Kegiatan" type="text" name="kegiatan" value="{{$edit->kegiatan}}">
									</div>
									<br>
									<h3 class="panel-title">Pukul(contoh: 12.00 AM)</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" type="time" name="pukul" value="{{$edit->pukul}}">
									</div>
									<br>									
									<h3 class="panel-title">Hari</h3>
									<select class="form-control" name="hari">
										<option value="Senin">Senin</option>
										<option value="Selasa">Selasa</option>
										<option value="Rabu">Rabu</option>
										<option value="Kamis">Kamis</option>
										<option value="Jum'at">Jum'at</option>
										<option value="Sabtu">Sabtu</option>
										<option value="Minggu">Minggu</option>
									</select><br>							
									<input type="hidden" name="id" value="{{$edit->id}}">	
									<button type="submit" class="btn btn-primary">Tambah Data</button>																
								</form>								
								</div>							
							</div>
@endsection