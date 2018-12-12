@extends('layouts.admin')
@section('admin')

	<!-- TABLE HOVER -->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title col-md-12">
				<div class="col-md-10">
				Gallery Wadah
			</div>
				<a href="{{url('dashboard/gallery/create')}}" class="btn btn-primary">Tambah</a>
			</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
						<tr>							
							<th>Id</th>
							<th>Jenis Wadah</th>														
							<th>Action</th>
						</tr>
				</thead>
				<tbody>
						@foreach($datas as $data)
						<tr>
							<td>{{$data->id}}</td>
							<td>{{$data->jenis}}</td>														
							<td>
								<a href="{{url('dashboard/gallery/show', $data->id)}}" class="btn btn-success">Show</a>														
							</td>
							<input type="hidden" name="id" value="{{$data->id}}">
						</tr>
						@endforeach						
				</tbody>
			</table>
		</div>
	</div>
	<!-- END TABLE HOVER -->

@endsection