@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Slideshow</h3>
								</div>
								<div class="panel-body">
								<form action="{{ url('dashboard/slideshow/post') }}" method="POST" enctype="multipart/form-data">
								@csrf									
									<h5 class="panel-title">Input Gambar</h5><br>									
									<input type="file" name="slide" class="form-control" style="padding-bottom:5%;" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									<br>
									<button type="submit" class="btn btn-primary">Tambah</button>
								</form>

								</div>
							</div>

@endsection