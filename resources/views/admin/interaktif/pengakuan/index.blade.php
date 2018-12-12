@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Pengakuan Iman</h3>
								</div>
								<form action="{{ url('dashboard/pengakuan/update') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="panel-body">
									<label>Nomor</label>
									<input type="text" class="form-control" value="{{$pengakuan->no}}" name="no">
									<br>
									<label>Isi</label>
									<textarea class="form-control" id="ayat" placeholder="textarea" rows="10" name="isi">{!!$pengakuan->isi!!}</textarea>
									<br>									
									<input type="hidden" name="id" value="{{$pengakuan->id}}">
									<button type="submit" class="btn btn-success">Edit Data</button>									
								</div>
							</form>
							</div>

@endsection