@extends('layouts.admin')
@section('admin')

<div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Edit Gallery</h3>
                </div>
                <div class="panel-body">
                <form action="{{ url('dashboard/gallery/update') }}" method="POST" enctype="multipart/form-data">
                @csrf    
                  <h3 class="panel-title">Jenis Wadah</h3>
                  <select class="form-control" name="id_wadah">
                    @foreach($wadah as $wadah)
                    <option value="{{$wadah->id}}">{{$wadah->jenis}}</option>
                    @endforeach
                  </select>
                  <br>             
                  <h5 class="panel-title">Input Gambar</h5><br>                 
                  <input type="file" name="gambar" class="form-control" style="padding-bottom:5%;" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                  <input type="hidden" name="id" value="{{$edit->id}}">
                  <br>
                  <button type="submit" class="btn btn-primary">Ganti</button>
                </form>

                </div>
              </div>

@endsection