@extends('layouts.admin')
@section('admin')

	<!-- TABLE HOVER -->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title col-md-12">
				<div class="col-md-10">
				Artikel Rohani
			</div>
				<a href="{{url('dashboard/artikel/create')}}" class="btn btn-primary">Tambah</a>
			</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
						<tr>
							<th>Id</th>
							<th>Judul</th>
							<th>Ayat</th>
							<th>Isi</th>
							<th>Action</th>
						</tr>
				</thead>
				<tbody>
					@foreach($datas as $data) 
						<tr>
							<td>{{$data->id}}</td>
							<td>{{$data->judul}}</td>
							<td>{{$data->ayat}}</td>
							<td>{!!substr($data->isi,0,10)!!}...</td>
							<td>
								<a href="{{url('dashboard/artikel/show', $data->id)}}" class="btn btn-link">Show</a>
								<a href="{{url('dashboard/artikel/edit', $data->id)}}" class="btn btn-success">Edit</a>
								<a href="{{url('dashboard/artikel/delete', $data->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach						
				</tbody>
			</table>
		</div>
	</div>
	<!-- END TABLE HOVER -->

@endsection