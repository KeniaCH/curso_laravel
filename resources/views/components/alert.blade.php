<div {{ $attributes ->merge(['class' =>'border alert alert-'.$type])}}>
    @if ($slot->isEmpty())
        <h4>This is default content if the slot is empty. </h4>
    @else
        {{ $slot }}
    @endif
   
    {{ $title }}
    <h2>Este es mi componente de Alert</h2>
    <h3>Tipo de alerta: {{ $type }}</h3>
    <h4>Nombre: {{ $message }}</h4>
    @foreach ($languages('Python') as $item)
    <h4>{{ $item }}</h4>
    
    @endforeach
    <h4>{{ $language }}</h4>
</div>