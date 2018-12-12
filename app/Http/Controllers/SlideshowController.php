<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Slideshow;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Slideshow::all();
        return view('admin.slideshow.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.slideshow.add');
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
      if ($request->hasFile('slide')) {
        $path = 'gambar';
        $file = $request->slide;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $featured_image = $fileName;
      }
    $input['slide'] = $featured_image;
      Slideshow::create($input);
          
      return redirect(url('dashboard/slideshow'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Slideshow::find($id);

        return view('admin.slideshow.edit')->with('edit',$edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        $featured_image = "";
      if ($r->hasFile('slide')) {
        $path = 'gambar';
        $file = $r->slide;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $featured_image = $fileName;
      }
      else{
        $featured_image = $update->slide;
      }

      $update = Slideshow::find($r->input('id'));
      $update->slide = $featured_image;
      $update->update();

      return redirect(url('dashboard/slideshow'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Slideshow::find($id);
        $delete->delete();

        return redirect(url('dashboard/slideshow'));
    }
}
