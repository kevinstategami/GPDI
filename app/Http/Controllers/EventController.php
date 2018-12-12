<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Wadah;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Event::all();
        return view('admin.wadah.event.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wadah = Wadah::all();
        return view('admin.wadah.event.create')->with('wadah', $wadah);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $post = new Event;
        $post->id_wadah = $r->input('id_wadah');
        $post->nama = $r->input('nama');
        $post->tanggal = $r->input('tanggal');
        $post->keterangan = $r->input('keterangan');
        $post->status = $r->input('status');
        $post->save();

        return redirect(url('dashboard/event'));
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
        $wadah = Wadah::all();
        $edit = Event::find($id);
        return view('admin.wadah.event.edit')->with('wadah', $wadah)->with('edit', $edit);
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
        $update = Event::find($r->input('id'));
        $update->id_wadah = $r->input('id_wadah');
        $update->nama = $r->input('nama');
        $update->tanggal = $r->input('tanggal');
        $update->keterangan = $r->input('keterangan');
        $update->status = $r->input('status');
        $update->update();

        return redirect(url('dashboard/event'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Event::find($id);
        $delete->delete();

        return redirect(url('dashboard/event'));
    }
}
