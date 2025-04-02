@extends('layout.app')
@section('title', 'Prueba de child ')
@section('content')
    <h1>Hola desde child</h1>
    <p>Este es el contenido de la vista child.</p>
    <h3>Hola {{ $name  }} {{ $lastname }},
        su edad es: {{ $age }} años
    </h3>
    @component('components.alert',['name' => 'Kenia'])
        @slot('title')
            Alerta
        @endslot

        <p>Este es el componente de Alert.</p>
    @endcomponent
@endsection