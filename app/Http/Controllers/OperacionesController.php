<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $x=30;
    private $y=20;
    public function index()
    {
        //
    }
    public function sumar(){
        echo 'La suma es: '. $this->x + $this->y;
    }
    public function restar(){
        echo 'La resta es: '.  $this->x - $this->y;
    }
    public function multiplicar(){
        echo 'La multiplicacion es: '. $this->x * $this->y;
    }
    public function dividir(){
        echo 'La dividir es: '. $this->x / $this->y;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
