<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Dato;


class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request){
         $file = $request->file('file');
          //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
     $extension = Input::file('file')->getClientOriginalExtension();
         $contents = array();
         $max = 0;
         $line_max = "";
         $aux = array();

            foreach(file($file) as $line) {
                $aux = $this->getMax($line);
                if($aux[0] > $max){
                    $max = $aux[0];
                    $line_max = $aux[1];
                }

                
           }
           $result = implode ( ',' , $line_max );
            $user =  Auth::id();
           $contents[] =$result;

            $dato = new Dato();

        $dato->data = $result;
        $dato->user_id = $user ;


        $dato->save();
          
          $datos = Dato::all();


       return view('showdata', array( 'data'=>$datos));
    }

    public function showdata(){
        return view('home');
    }

    public function getMax($string){

        $string = preg_match_all('/([A-Z]{1})/',$string,$match);
        return array($string,$match[0]);
    }


}
