@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Permohonan Doa</h3>
								</div>
								<form action="{{ url('dashboard/permohonandoa/update') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="panel-body">
									<label>Ayat Alkitab</label>
									<input type="text" class="form-control" value="{{$permohonan->ayat}}" name="ayat">
									<br>
									<label>Isi Ayat</label>
									<textarea class="form-control" id="ayat" placeholder="textarea" rows="10" name="isi">{!!$permohonan->isi!!}</textarea>
									<br>
									<label>Makna Doa</label>
									<textarea class="form-control" id="ckeditor" placeholder="textarea" rows="10" name="makna">{!!$permohonan->makna!!}</textarea>
									<br>
									<input type="hidden" name="id" value="{{$permohonan->id}}">
									<button type="submit" class="btn btn-success">Edit Data</button>									
								</div>
							</form>
							</div>

@endsection