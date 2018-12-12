<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Slideshow;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.home');
    }

    public function home()
    {
        $slide = Slideshow::all();
        return view('index')->with('slide', $slide);
    }    
}
