<html>
    <head>
        <title>Data</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }} </td>
                        <td>{{ $user->email }} </td>
                        <td>{{ $user->phone }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{--<h5>Usuario: {{ $usr->name}} {{$usr->lastname }}</h5>--}}
        <ul>
            @foreach ($usr as $u)
                <li>
                     {{ $u }}
                </li>

            @endforeach
        </ul>
    </body>
</html>
