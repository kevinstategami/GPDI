@extends('layouts.admin')
@section('admin')


	<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<h3 class="page-title">						
						<div class="col-sm-8">
						Gambar
						</div>
					</h3>										
						@foreach($show as $data)
						<div class="col-sm-4">
							<!-- PANEL NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Gambar</h3>
									<div class="right">
										<a href="{{url('dashboard/gallery/edit', $data->id)}}"><i class="fa fa-edit"></i></a>
										<a href="{{url('dashboard/gallery/delete', $data->id)}}"><i class="lnr lnr-trash"></i></a>
									</div>
								</div>
								<div class="panel-body no-padding bg-primary text-center">
										<img class="col-sm-12" src="{{asset('gambar/'.$data->gambar)}}"></img>
								</div>
							</div>							
						</div>
						@endforeach					
							<!-- END PANEL NO PADDING -->
					</div>	
			</div>		
	</div>						
@endsection