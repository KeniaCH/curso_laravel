<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName($name){
        return view('welcome',['name' => $name]);
    }
    public function index(){
        $x = 20;
        $y = 30;
        echo 'La suma es: '.$this->sumar($x,$y);
    }
    public function sumar($x,$y){
        return $x + $y;
    }
}
