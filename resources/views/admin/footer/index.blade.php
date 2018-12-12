@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Footer</h3>
								</div>
								<form action="{{ url('dashboard/footer/update') }}" method="POST" enctype="multipart/form-data">
									@csrf
								<div class="panel-body">																						
									<h3 class="panel-title">Contact</h3>
									<br>
									<div class="input-group">										
										<textarea class="form-control" id="ckeditor" name="contact" placeholder="Isi Contact" rows="4" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">{{$footer->contact}}</textarea>
									</div>
									<br>									

									<h3 class="panel-title">About Us</h3>
									<br>
									<div class="input-group">										
										<textarea class="form-control" id="isi" name="isi" placeholder="Isi Khotbah" rows="4" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">{{$footer->isi}}</textarea>
									</div>
									<br>
									<input type="hidden" value="{{$footer->id}}" name="id">
									<button type="submit" class="btn btn-success">Edit Data</button>																
								</form>								
								</div>							
							</div>
@endsection