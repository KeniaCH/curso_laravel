@props(['type','name'])
<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    <h2>Este es un componente Anónimo</h2>
    <h3>Tipo de alerta: {{ $type }}</h3>
    <h4>Nombre: {{ $name }}</h4>
</div>