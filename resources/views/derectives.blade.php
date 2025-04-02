@if($num == 7)
    <h2>Es igual</h2>
    @elseif ($num < 7 )
    <h2>Es menor</h2>
    @else
    <h2>Es mayor</h2>
@endif
@isset($data)
    <h2>Variable esta definida y no es null</h2> 
@endisset

@empty($data)
    <h2>Valor vacío</h2>
@endempty

<hr>
@for ($i=0; $i < count($names); $i++)
    <h2>{{ $i }} => {{ $names[$i] }}</h2>

@endfor

@forelse ($names as $name)
    <li>{{ $name }}</li>
@empty
    <p>No users</p>
@endforelse