<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crear Usuario</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                {{-- {{ dd($users) }} --}}
                <div class="card shadow-lg  border-0 rounded-lg mt-5" style="background-color: #4C356A">
                    <div class="card-header" style="background-color:#FFFFFF;">
                        <h2> Crear Usuarios</h2>
                        <h3 class="text-center font-weight-light my-4"></h3>
                    </div>


                    <div class="card-body" autocomplete="off">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Nickname</span>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Primer Nombre</span>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Primer Apellido</span>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Primer apellido</span>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Segundo Apellido</span>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@Correo</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>



                        <div class="row">
                            <div class="col-11 ">
                                <form action="{{ route('usuarios.store') }}" method="POST">
                                    @csrf
                                    @method('INSERT')
                                    <a class="btn btn-primary" href="{{ route('usuarios.create') }}">Crear</a>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                </form>
                            </div>
                            <div class="col-1 ">
                                <a class="btn btn-success  me-0" href="{{ route('usuarios.index') }}"> Volver</a>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        </tr>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
