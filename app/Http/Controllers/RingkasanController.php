<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\RingkasanKhotbah;

class RingkasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = RingkasanKhotbah::all();
        return view('admin.info_rohani.ringkasan.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.info_rohani.ringkasan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $featured_image = "";
      if ($request->hasFile('cover')) {
        $path = 'gambar';
        $file = $request->cover;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $featured_image = $fileName;
      }

      $post = new RingkasanKhotbah;
      $post->cover = $featured_image;
      $post->judul = $request->input('judul');
      $post->ayat = $request->input('ayat');
      $post->isi = $request->input('isi');
      $post->id_pembawa = $request->input('id_pembawa');
      $post->pembuat = $request->input('pembuat');
      $post->save();

      return redirect(url('dashboard/ringkasan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = RingkasanKhotbah::find($id);

        return view('admin.info_rohani.ringkasan.show')->with('show', $show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = RingkasanKhotbah::find($id);

        return view('admin.info_rohani.ringkasan.edit')->with('edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $update = RingkasanKhotbah::find($request->input('id'));
            
      if ($request->hasFile('cover')) {
        $path = 'gambar';
        $file = $request->cover;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $update->cover = $fileName;
      }else{
        $update->cover = $update->cover;
      }
      
      $update->judul = $request->input('judul');
      $update->ayat = $request->input('ayat');
      $update->isi = $request->input('isi');
      $update->id_pembawa = $request->input('id_pembawa');
      $update->pembuat = $request->input('pembuat');
      $update->update();

      return redirect(url('dashboard/ringkasan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = RingkasanKhotbah::find($id);
        $delete->delete();

        return redirect(url('dashboard/ringkasan'));
    }   
}
