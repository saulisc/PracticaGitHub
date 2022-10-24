<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorGitHub;
 

class ControladorVistas extends Controller
{
    public function procesarFormulario(validadorGitHub $request){
        return redirect() -> route('formulario') -> with('confirmacion', 'tus datos llegaron al controlador');
    }

    public function showHome(){
        return view('home');
    }

    public function showFormulario(){
        return view('formulario');
    }

    public function showTabla(){
        return view('tabla');
    }
}
