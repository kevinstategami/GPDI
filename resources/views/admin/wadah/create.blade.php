@extends('layouts.admin')
@section('admin')

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Wadah</h3>
								</div>
								<form action="{{ url('dashboard/wadah/post') }}" method="POST" enctype="multipart/form-data">
									@csrf
								<div class="panel-body">													
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Ketua" type="text" name="ketua" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Sekretaris" type="text" name="sekretaris" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Bendahara" type="text" name="bendahara" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Seksi Acara" type="text" name="seksi_acara" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Seksi Musik" type="text" name="seksi_musik" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Seksi Konseling & Doa" type="text" name="seksi_konseling_doa" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>																										
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Jenis Wadah" type="text" name="jenis" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
								</div>							
							</div>
							<!-- END INPUT GROUPS -->

							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Gambar Wadah</h3>
								</div>
								<div class="panel-body">																						
									<br>
									<div class="input-group">										
										<h5 class="panel-title">Ketua</h5>
										<input type="file" name="img_ketua">										
									</div>
									<br>
									<div class="input-group">										
										<h5 class="panel-title">Sekretaris</h5>
										<input type="file" name="img_sekretaris">										
									</div>
									<br>
									<div class="input-group">										
										<h5 class="panel-title">Bendahara</h5>
										<input type="file" name="img_bendahara">										
									</div>
									<br>
									<div class="input-group">										
										<h5 class="panel-title">Seksi Acara</h5>
										<input type="file" name="img_acara">										
									</div>
									<br>
									<div class="input-group">										
										<h5 class="panel-title">Seksi Musik</h5>
										<input type="file" name="img_musik">										
									</div>
									<br>
									<div class="input-group">										
										<h5 class="panel-title">Seksi Konseling & Doa</h5>
										<input type="file" name="img_konseling_doa">										
									</div>	
									<br>																
									<br>
									<button type="submit" class="btn btn-primary">Tambah Data</button>
									</form>
								</div>
							</div>

@endsection