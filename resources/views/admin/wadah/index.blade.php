@extends('layouts.admin')
@section('admin')

	<!-- TABLE HOVER -->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title col-md-12">
				<div class="col-md-10">
				Wadah
			</div>
				<a href="{{url('dashboard/wadah/create')}}" class="btn btn-primary">Tambah</a>
			</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
						<tr>							
							<th>Jenis Wadah</th>
							<th>Ketua</th>
							<th>Sekretaris</th>
							<th>Bendahara</th>
							<th>Seksi Acara</th>
							<th>Seksi Musik</th>
							<th>Seksi Konseling & Doa</th>
							<th>Action</th>
						</tr>
				</thead>
				<tbody>
						@foreach($datas as $data)
						<tr>
							<td>{{$data->jenis}}</td>							
							<td>{{$data->ketua}}</td>
							<td>{{$data->sekretaris}}</td>
							<td>{{$data->bendahara}}</td>
							<td>{{$data->seksi_acara}}</td>
							<td>{{$data->seksi_musik}}</td>
							<td>{{$data->seksi_konseling_doa}}</td>
							<td>
								<a href="{{url('dashboard/wadah/edit', $data->id)}}" class="btn btn-success">Edit</a>
								<a href="{{url('dashboard/wadah/delete', $data->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach						
				</tbody>
			</table>
		</div>
	</div>
	<!-- END TABLE HOVER -->

@endsection