<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName(){
        return view('welcome',['name' => 'Kenia']);
    }
    public function index(){
        $x = 30;
        $y = 20;
        echo 'La suma es: '.$this->sumar($x,$y);
        
    }
    public function sumar($x,$y){
        return $x + $y;
    }
    
}
