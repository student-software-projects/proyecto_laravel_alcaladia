<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Detalles del equipo</title>
</head>

<style>
    body {
        background-image: url("{{asset('contenido/imagenes/img4.jpg')}}");
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

</style>

<body>

<div class="container tabla">
    <div class="row">
        <div class="col-md-6 medium-text-center">
            <table class="table ">
                <h1 class="button warning">Detalles del equipo</h1>
                <div class="alert-info" role="alert">
                    {{session('mesa2')}}
                </div>
                <tr>
                    <th> Nombre del equipo </th><td> {{$equipo->team_name}}</td>
                </tr>
                <tr>
                    <th> Logo </th> <td> {{$equipo->logo}}</td>
                </tr>
                <tr>
                    <th> localidad </th> <td> {{$equipo->localidad_id}}</td>
                </tr>
            </table>
            <a href="{{route('equipo.edit',$equipo->id)}}" class="button primary ">Editar</a>
            <a href="{{route('equipo.index')}}" class="button alert">Cancelar</a>
        </div>
    </div>
</div>

<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>

</body>
</html>
