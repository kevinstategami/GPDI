<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Wadah;

class WadahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Wadah::all();
        return view('admin.wadah.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wadah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $img_ketua = "";
        $img_sekretaris = "";
        $img_bendahara = "";
        $img_acara = "";
        $img_musik = "";
        $img_konseling_doa = "";

      if ($r->hasFile('img_ketua')) {
        $path = 'gambar';
        $file = $r->img_ketua;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_ketua = $fileName;
      }

      if ($r->hasFile('img_sekretaris')) {
        $path = 'gambar';
        $file = $r->img_sekretaris;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_sekretaris = $fileName;
      }

      if ($r->hasFile('img_bendahara')) {
        $path = 'gambar';
        $file = $r->img_bendahara;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_bendahara = $fileName;
      }

      if ($r->hasFile('img_acara')) {
        $path = 'gambar';
        $file = $r->img_acara;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_acara = $fileName;
      }

      if ($r->hasFile('img_musik')) {
        $path = 'gambar';
        $file = $r->img_musik;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_musik = $fileName;
      }

      if ($r->hasFile('img_konseling_doa')) {
        $path = 'gambar';
        $file = $r->img_konseling_doa;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_konseling_doa = $fileName;
      }     

      $post = new Wadah;
      $post->ketua = $r->input('ketua');
      $post->sekretaris = $r->input('sekretaris');
      $post->bendahara = $r->input('bendahara');
      $post->seksi_acara = $r->input('seksi_acara');
      $post->seksi_musik = $r->input('seksi_musik');
      $post->seksi_konseling_doa = $r->input('seksi_konseling_doa');
      $post->jenis = $r->input('jenis');
      $post->img_ketua =$img_ketua;
      $post->img_sekretaris =$img_sekretaris;
      $post->img_bendahara =$img_bendahara;
      $post->img_acara =$img_acara;
      $post->img_musik =$img_musik;
      $post->img_konseling_doa =$img_konseling_doa;
      $post->save();

      return redirect(url('dashboard/wadah'));
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
        $edit = Wadah::find($id);
        return view('admin.wadah.edit')->with('edit', $edit);
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
      $update = Wadah::find($r->input('id'));                                  
        $img_ketua = "";
        $img_sekretaris = "";
        $img_bendahara = "";
        $img_acara = "";
        $img_musik = "";
        $img_konseling_doa = "";

      // if ($r->file('img_ketua') != "") {
      //   $update->img_ketua = $update->img_ketua;      
      // }
      // elseif ($r->file('img_sekretaris') == "") {
      //   $update->img_sekretaris = $update->img_sekretaris;
      // }
      // elseif ($r->file('img_bendahara') == "") {
      //   $update->img_bendahara = $update->img_bendahara;
      // }
      // elseif ($r->file('img_acara') == "") {  
      //   $update->img_acara = $update->img_acara;        
      // }
      // elseif ($r->file('img_musik') == "") {
      //   $update->img_musik = $update->img_musik;
      // }
      // elseif ($r->file('img_konseling_doa') == "") {
      //   $update->img_konseling_doa = $update->img_konseling_doa;
      // }

      if ($r->hasFile('img_ketua')) {
        $path = 'gambar';
        $file = $r->img_ketua;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_ketua = $fileName;
      }
      else {
        $img_ketua = $update->img_ketua;
      }

      if ($r->hasFile('img_sekretaris')) {
        $path = 'gambar';
        $file = $r->img_sekretaris;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_sekretaris = $fileName;
      }else {
        $img_sekretaris = $update->img_sekretaris;
      }

      if ($r->hasFile('img_bendahara')) {
        $path = 'gambar';
        $file = $r->img_bendahara;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_bendahara = $fileName;
      }else {
        $img_bendahara = $update->img_bendahara;
      }

      if ($r->hasFile('img_acara')) {
        $path = 'gambar';
        $file = $r->img_acara;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_acara = $fileName;
      }else {
        $img_acara = $update->img_acara;
      }

      if ($r->hasFile('img_musik')) {
        $path = 'gambar';
        $file = $r->img_musik;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_musik = $fileName;
      }else {
        $img_musik = $update->img_musik;
      }

      if ($r->hasFile('img_konseling_doa')) {
        $path = 'gambar';
        $file = $r->img_konseling_doa;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $img_konseling_doa = $fileName;
      }else {
        $img_konseling_doa = $update->img_konseling_doa;
      }     
      

      $update->ketua = $r->input('ketua');
      $update->sekretaris = $r->input('sekretaris');
      $update->bendahara = $r->input('bendahara');
      $update->seksi_acara = $r->input('seksi_acara');
      $update->seksi_musik = $r->input('seksi_musik');
      $update->seksi_konseling_doa = $r->input('seksi_konseling_doa');
      $update->jenis = $r->input('jenis');
      $update->img_ketua =$img_ketua;
      $update->img_sekretaris =$img_sekretaris;
      $update->img_bendahara =$img_bendahara;
      $update->img_acara =$img_acara;
      $update->img_musik =$img_musik;
      $update->img_konseling_doa =$img_konseling_doa;            
      $update->save();
      // dd($r);
      return redirect(url('dashboard/wadah'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
