<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dato;

class DatoController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos = Dato::all();

        return view('dato.index', ['datos' => $datos]);
    }
    
    public function showdata(Request $contents){
        
        return view('showdata', array( 'data'=>$contents ) );
    }
}
