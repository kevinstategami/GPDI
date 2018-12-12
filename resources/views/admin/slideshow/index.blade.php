@extends('layouts.admin')
@section('admin')


	<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<h3 class="page-title">						
						<div class="col-sm-8">
						Slideshows
						</div>
						<a href="{{url('dashboard/slideshow/tambah')}}" class="btn btn-primary">Tambah</a>
					</h3>														
							<!-- PANEL NO PADDING -->
							@foreach($datas as $data)
							<div class="col-sm-4">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Slide</h3>
									<div class="right">
										<a href="{{url('dashboard/slideshow/edit', $data->id)}}"><i class="fa fa-edit"></i></a>
										<a href="{{url('dashboard/slideshow/delete', $data->id)}}"	><i class="lnr lnr-trash"></i></a>
									</div>
								</div>
								<div class="panel-body no-padding bg-primary text-center">
										<img class="col-sm-12" src="{{asset('gambar/'.$data->slide)}}"></img>
								</div>
							</div>							
							</div>
							@endforeach					
							<!-- END PANEL NO PADDING -->
					</div>	
			</div>		
	</div>						
@endsection