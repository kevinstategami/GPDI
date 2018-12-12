@extends('layouts.admin')
@section('admin')

	<!-- TABLE HOVER -->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title col-md-12">
				<div class="col-md-10">
				Event Wadah
			</div>
				<a href="{{url('dashboard/event/create')}}" class="btn btn-primary">Tambah</a>
			</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
						<tr>							
							<th>Jenis Wadah</th>
							<th>Nama</th>
							<th>Tanggal</th>
							<th>Keterangan</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
				</thead>
				<tbody>
						@foreach($datas as $data)
						<tr>
							<td>{{$data->wadah->jenis}}</td>
							<td>{{$data->nama}}</td>
							<td>{{$data->tanggal}}</td>
							<td>{{$data->keterangan}}</td>
							<td>{{$data->status}}</td>							
							<td>
								<a href="{{url('dashboard/event/edit', $data->id)}}" class="btn btn-success">Edit</a>
								<a href="{{url('dashboard/event/delete', $data->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach						
				</tbody>
			</table>
		</div>
	</div>
	<!-- END TABLE HOVER -->

@endsection