<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;

class AdminController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function footer()
    {
    	$footer = Footer::where('id', '1')->first();
    	return view('admin.footer.index')->with('footer', $footer);
    }

    public function update_footer(Request $r)
    {
    	$update = Footer::find($r->input('id'));
    	$update->contact = $r->input('contact');
    	$update->isi = $r->input('isi');
    	$update->update();

    	return redirect(url('dashboard/footer'));
    }
}
