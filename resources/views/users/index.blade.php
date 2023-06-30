<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Vista</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Usuarios</h2>
                <a class="btn btn-success" href="{{ route('usuarios.create') }}"> Crear Usuario</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table id="example" class="table table-striped" style="width:100% p-4 m-5">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nickname</th>
                            <th>Primer Nombre</th>
                            <th>Segundo Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Email</th>
                            <th colspan="2">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- {{ dd($users) }} --}}

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nickname }}</td>
                                <td>{{ $user->primer_nombre }}</td>
                                <td>{{ $user->segundo_nombre }}</td>
                                <td>{{ $user->primer_apellido }}</td>
                                <td>{{ $user->segundo_apellido }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('usuarios.edit', $user->id) }}">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->render() }}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
