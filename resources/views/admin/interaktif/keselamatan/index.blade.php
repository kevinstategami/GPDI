@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Keselamatan</h3>
								</div>
								<form action="{{ url('dashboard/permohonandoa/update') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="panel-body">
									<label>Kata Pengantar</label>
									<input type="text" class="form-control" value="{{$keselamatan->kata_pengantar}}" name="kata_pengantar">
									<br>
									<label>Ayat Alkitab</label>
									<input type="text" class="form-control" value="{{$keselamatan->ayat}}" name="ayat">
									<br>
									<label>Isi Ayat</label>
									<input type="text" class="form-control" name="isi" value="{{$keselamatan->isi}}">
									<br>
									<label>Makna Doa</label>
									<textarea class="form-control" id="ckeditor" placeholder="textarea" rows="10" name="makna">{!!$keselamatan->makna!!}</textarea>									
									<br>
									<input type="hidden" name="id" value="{{$keselamatan->id}}">
									<button type="submit" class="btn btn-success">Edit Data</button>									
								</div>
							</form>
							</div>

@endsection