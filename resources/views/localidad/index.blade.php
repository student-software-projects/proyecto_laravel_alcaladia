<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Localidades</title>
</head>
<style>
    body {
        background-image: url("{{asset('contenido/imagenes/img3.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Montserrat', sans-serif;
    }
    .tabla{
        display: flex;
        align-items: center;
        height: 100vh;
        padding: 400px 400px;

    }
    .table-bordered{
        opacity: .9;
    }
</style>

<body>
<div class="container tabla">
    <div class="row">
        <div class="col-md-12 medium-text-center">
            <div class="table-responsive">
                <table class="table table-bordered">


                    <div class="alert-success" role="alert">
                        {{session('message')}}
                    </div>
                    <div class="alert-primary" role="alert">
                        {{session('mesa')}}
                    </div>
                    <thead>
                    <tr>
                        <th>Localidad</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($localidades as $Localidad)
                        <tr>
                            <td>{{$Localidad->location }}</td>
                            <td>
                                <form action="{{route('localidad.destroy',$Localidad->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('localidad.show',$Localidad->id)}}"
                                       class="button warning">Detalles</a>
                                    <a href="{{route('localidad.edit',$Localidad->id)}}"
                                       class="button primary">Editar</a>
                                    <button type="submit" class="button alert">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <td>
                <a href="{{route('localidad.create')}}" class="button primary">Crear nueva localidad </a>
                <a href="{{route('home.index')}}" class="button alert">Cancelar</a>
            </td>
        </div>
    </div>
</div>

<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>

</body>
</html>

