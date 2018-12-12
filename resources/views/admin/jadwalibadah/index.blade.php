@extends('layouts.admin')
@section('admin')

	<!-- TABLE HOVER -->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title col-md-12">
				<div class="col-md-10">
				Wadah 
			</div>
				<a href="{{url('dashboard/jadwal/create')}}" class="btn btn-primary">Tambah</a>
			</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
						<tr>
							<th>Id</th>
							<th>Kegiatan</th>
							<th>Pukul</th>
							<th>Hari</th>
							<th>Action</th>
						</tr>
				</thead>				
				<tbody>
					@foreach($datas as $data) 
						<tr>
							<td>{{$data->id}}</td>
							<td>{{$data->kegiatan}}</td>
							<td>{{$data->pukul}}</td>
							<td>{{$data->hari}}</td>
							<td>
								<a href="{{url('dashboard/jadwal/edit', $data->id)}}" class="btn btn-success">Edit</a>
								<a href="{{url('dashboard/jadwal/delete', $data->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach						
				</tbody>
			</table>
		</div>
	</div>
	<!-- END TABLE HOVER -->

@endsection