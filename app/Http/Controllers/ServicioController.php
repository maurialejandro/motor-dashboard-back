<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Motor;
use Illuminate\Support\Facades\DB;
use app\events;
use Illuminate\Support\Facades\Validator;

class ServicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request){
        
    }
    
    public function __construct(){
        $this->middleware('auth', ['except' => ['create', 'home', 'show', 'store', 'services']]);
    }

    public function create(){
        return view('motor-services.services');
    }

    public function home(){
        //$motors = DB::table('motor')->orderBy('id', 'desc')->get();
        return view('layouts.app');
    }

    public function store(Request $request){

    }
    
}
