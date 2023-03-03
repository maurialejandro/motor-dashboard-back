<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use Illuminate\Support\Facades\DB;
use app\events;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\File;

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
        $this->middleware('auth', ['except' => ['create', 'home', 'show', 'store', 'services','getImage']]);
    }

    public function create(){
        return view('motor-services.services');
    }
    
    public function home(){
        $motors = DB::table('motor')->orderBy('id', 'desc')->get();
        return view('home.home', array(
            'motors' => $motors
        ));
    }

    public function store(Request $request){
        $request->validate([
            'cliente' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'precio' => 'required|numeric',
            'img' => 'required|mimes:jpeg,png,jpg,doc,docx,pdf,mp4,mov,ogg,qt',
        ]);

        //guardar servicio 
        $motor = new Motor();;
        $motor->cliente = $request->input('cliente');
        $motor->marca = $request->input('marca');
        $motor->modelo = $request->input('modelo');
        $motor->precio = $request->input('precio');
        $path = $request->img->store('service');
        $motor->img = $path;
        $motor->save();
    
        $data = array(
            'motor' => $motor,
            'status' => 'success',
            'code' => 200, 
        );
        return redirect()->route('home')->with(array(
            'message' => 'El Servicio se guardo satisfactoriamente!!'
        ));     
    }
    public function getImage($filename){
        $file = Storage::disk('service')->get($filename);
        return response($file,200);
    }
    
}
