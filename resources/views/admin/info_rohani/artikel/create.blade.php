@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Ringkasan Khotbah</h3>
								</div>
								<form action="{{ url('dashboard/artikel/post') }}" method="POST" enctype="multipart/form-data">
									@csrf
								<div class="panel-body">													
									<h3 class="panel-title">Cover</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" type="file" name="cover" style="padding-bottom:5%;" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<h3 class="panel-title">Judul</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Judul" type="text" name="judul" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<h3 class="panel-title">Ayat</h3>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="ayat" type="text" name="ayat"required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<h3 class="panel-title">Isi</h3>
									<div class="input-group">										
										<textarea class="form-control" id="ckeditor" name="isi" placeholder="Isi Khotbah" rows="4" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
									</div>
									<br>																			
										<input class="form-control" type="hidden" name="id_pembawa" value="{{Auth::user()->id}}" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">																																		

									<button type="submit" class="btn btn-primary">Tambah Data</button>																
								</form>								
								</div>							
							</div>
@endsection