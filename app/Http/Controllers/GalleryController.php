<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Gallery;
use App\Wadah;

class GalleryController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Wadah::all();
        return view('admin.wadah.gallery.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {        
        $wadah = Wadah::all();        
        return view('admin.wadah.gallery.create')->with('wadah', $wadah);
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
      if ($request->hasFile('gambar')) {
        $path = 'gambar';
        $file = $request->gambar;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $featured_image = $fileName;
      }

      $post = new Gallery;
      $post->id_wadah = $request->input('id_wadah');
      $post->gambar = $featured_image;
      $post->save();

      return redirect(url('dashboard/gallery'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Gallery::where('id_wadah', $id)->get();
        return view('admin.wadah.gallery.show')->with('show', $show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $wadah = Wadah::all();
        $edit = Gallery::find($id);
        return view('admin.wadah.gallery.edit')->with('edit', $edit)->with('wadah', $wadah);
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
        $featured_image = "";
      if ($request->hasFile('gambar')) {
        $path = 'gambar';
        $file = $request->gambar;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $featured_image = $fileName;
      }else{
        $featured_image = $update->gambar;
      }

      $update = Gallery::find($request->input('id'));
      $update->id_wadah = $request->input('id_wadah');
      $update->gambar = $featured_image;
      $update->update();

      return redirect(url('dashboard/gallery'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Gallery::find($id);
        $delete->delete();

        return redirect(url('dashboard/gallery'));
    }
}
