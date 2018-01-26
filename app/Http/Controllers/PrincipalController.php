<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Producto;
use App\Models\Informacion;
use Flash;
use App\Events\FormularioEnviado;

use Mail;
use App\Mail\ContactoMail;

class PrincipalController extends Controller
{
    public function index()
    {
        $slider=Slider::orderBy('id','desc')->limit(3)->get();
        $pro=Producto::orderBy('id','desc')->limit(3)->get();
        $info=Informacion::where('id','=',1)->first();
        $menu=Producto::orderBy('id','desc')->get();
    	return view('front.inicio',compact(['slider','pro','info','menu']));
    }


    public function quienes_somos()
    {
        $info=Informacion::where('id','=',1)->first();
         $menu=Producto::orderBy('id','desc')->get();
    	return view('front.quienes_somos',compact(['info','menu']));
    }


    public function producto_singles($slug)
    {
        $info=Informacion::where('id','=',1)->first();
        $pro=Producto::where('slug','=',$slug)->first();
        $producto=Producto::orderBy('id','desc')->get();
        $menu=Producto::orderBy('id','desc')->get();
        return view('front.producto_single',compact(['info','pro','producto','menu']));
    }

    public function contacto(){
        $info=Informacion::where('id','=',1)->first();
        $menu=Producto::orderBy('id','desc')->get();
    	return view('front.contacto',compact(['info','menu']));
    }

    public function enviar_formulario(Request $request){
        $nombre=$request->nombre;
        $apellido=$request->apellido;
        $telefono=$request->telefono;
        $email=$request->email;
        //$persona=$request->persona;
        $mensaje=$request->mensaje;

        //envio de correo
        FormularioEnviado::dispatch($nombre , $apellido,$telefono,$email,$mensaje);
        Flash::success('Formulario Enviado Correstamente');
        return redirect()->back();
    }

}
