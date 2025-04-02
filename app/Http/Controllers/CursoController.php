<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName(){
        return view('welcome',['name' => 'Kenia']);
    }
    public function index(){
       /* $x = 30;
        $y = 20;
        echo 'La suma es: '.$this->sumar($x,$y);*/
        $name = "Juan";
        $lastname = "Torres Gonzalez";
        $age = 20;
       /* return view('layout.child',[
            'name' => $name,
            'lastname' => $lastname,
            'age' => $age,    
        ]);*/
        
       // return view('layout.child')->with('name', $name)->with('lastname', $lastname)->with('age', $age);
        return view('layout.child',compact('name','lastname','age'));
    }
    public function sumar($x,$y){
        return $x + $y;
    }
    
}
