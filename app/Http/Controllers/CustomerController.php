<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Wadah;
use App\JadwalIbadah;
use App\RingkasanKhotbah;
use App\ArtikelRohani;
use App\PermohonanDoa;
use App\Keselamatan;
use App\PengakuanIman;
use App\Gallery;

class CustomerController extends Controller
{
    public function wadah()
    {
        $wadah = Wadah::all();
        return view('customer.wadah.home')->with('wadah', $wadah);
    }

    public function wadah_show($id)
    {
        $show = Wadah::find($id);
    	return view('customer.wadah.show')->with('show', $show);
    }

    public function jadwalibadah()
    {
        $jadwal = JadwalIbadah::all();
    	return view('customer.jadwalibadah.home')->with('jadwal', $jadwal);
    }

    //Ringkasan Khotbah
    public function ringkasankhotbah()
    {
        $ringkasan = RingkasanKhotbah::all();
    	return view('customer.inforohani.ringkasankhotbah.home')->with('ringkasan', $ringkasan);
    }

    public function show_ringkasankhotbah($id)
    {
        $show = RingkasanKhotbah::find($id);
        return view('customer.inforohani.ringkasankhotbah.show')->with('show', $show);
    }
    //EndRingkasan

    //Artikel Rohani

    public function artikelrohani()
    {
        $artikel = ArtikelRohani::all();
        return view('customer.inforohani.artikel.home')->with('artikel', $artikel);
    }

    public function show_artikelrohani($id)
    {
        $show = ArtikelRohani::find($id);
        return view('customer.inforohani.artikel.show')->with('show', $show);
    }

    //ENDArtikel

    //PERMOHONAN DOA
    public function permohonandoa()
    {
        $permohonandoa = PermohonanDoa::all();
        return view('customer.interaktif.permohonan_doa')->with('permohonandoa', $permohonandoa);
    }


    public function post_permohonandoa(Request $r)
    {
        $post = new Customer;
        $post->nama = $r->input('nama');
        $post->email = $r->input('email');
        $post->alamat = $r->input('alamat');
        $post->umur = $r->input('umur');
        $post->isi_doa = $r->input('isi_doa');
        $post->save();

        return redirect(url('/permohonandoa'));

    }

    //END PERMOHONAN DOA

    //Gallery

    public function gallery()
    {
        $wadah = Wadah::all();
        return view('customer.wadah.gallery.index')->with('wadah', $wadah);
    }

    public function show_gallery($id)
    {
        $gallery = Gallery::where( 'id_wadah',$id)->get();
        return view('customer.wadah.gallery.show')->with('gallery', $gallery);
    }

    //EndGallery

    //KESELAMATAN
    public function keselamatan()
    {
        $keselamatan = Keselamatan::all();
        return view('customer.interaktif.keselamatan')->with('keselamatan', $keselamatan);
    }
    //END KESELAMATAN

    //PENGAKUAN IMAN
    public function pengakuan()
    {
        $pengakuan = PengakuanIman::all();
        return view('customer.interaktif.pengakuan')->with('pengakuan', $pengakuan);
    }
    //END PENGAKUAN IMAN


    //ADMIN
    public function index()
    {   
        $datas = Customer::all();
        return view('admin.interaktif.customer.index')->with('datas', $datas);
    }

    public function destroy($id)
    {
        $delete = Customer::find($id);
        $delete->delete();

        return redirect(url('dashboard/customer'));
    }
}
