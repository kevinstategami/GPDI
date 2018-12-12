<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalIbadah;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = JadwalIbadah::all();
        return view('admin.jadwalibadah.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwalibadah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $post = new JadwalIbadah;
        $post->kegiatan = $r->input('kegiatan');
        $post->pukul = $r->input('pukul');
        $post->hari = $r->input('hari');
        $post->save();

        return redirect(url('dashboard/jadwal'));
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
        $edit = JadwalIbadah::find($id);

        return view('admin.jadwalibadah.edit')->with('edit', $edit);
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
        $update = JadwalIbadah::find($r->input('id'));
        $update->kegiatan = $r->input('kegiatan');
        $update->pukul = $r->input('pukul');
        $update->hari = $r->input('hari');
        $update->update();

        return redirect(url('dashboard/jadwal'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = JadwalIbadah::find($id);
        $delete->delete();

        return redirect(url('dashboard/jadwal'));
    }
}
