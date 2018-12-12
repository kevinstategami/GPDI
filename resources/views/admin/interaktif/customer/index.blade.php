	@extends('layouts.admin')
@section('admin')

	<!-- TABLE HOVER -->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title col-md-12">
				<div class="col-md-10">
				Biodata Jemaat 
			</div>				
			</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
						<tr>
							<th>Id</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Alamat</th>
							<th>Umur</th>
							<th>Isi Doa</th>
						</tr>
				</thead>				
				<tbody>
					@foreach($datas as $data) 
						<tr>
							<td>{{$data->id}}</td>
							<td>{{$data->nama}}</td>
							<td>{{$data->email}}</td>
							<td>{{$data->alamat}}</td>
							<td>{{$data->umur}}</td>
							<td>{{$data->isi_doa}}</td>
							<td>								
								<a href="{{url('dashboard/customer/delete', $data->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach						
				</tbody>
			</table>
		</div>
	</div>
	<!-- END TABLE HOVER -->

@endsection