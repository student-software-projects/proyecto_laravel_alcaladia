<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Detalles del jugador</title>
</head>


<style>
    body {
        background-image: url("{{asset('contenido/imagenes/img5.jpeg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Montserrat', sans-serif;
    }
    .tabla{
        display: flex;
        align-items: center;
        height: 100vh;
        padding: 500px 500px;
    }

</style>

<body>

<div class="container tabla">
    <div class="row">
        <div class="col-md-6 medium-text-center">
            <table class="table ">
                <h1 class="button warning" >Detalles del jugador</h1>
                <div class="alert-info" role="alert">
                    {{session('mesa2')}}
                </div>
                <tr>
                    <th>Nombres</th> <td> {{$Jugador->name}}</td>
                </tr>
                <tr>
                    <th>Apellidos</th> <td> {{$Jugador->lastname}}</td>
                </tr>
                <tr>
                    <th>Nunero de camisa</th> <td> {{$Jugador->shirt_name}}</td>
                </tr>
                <tr>
                    <th>Apodo</th> <td> {{$Jugador->nickname}}</td>
                </tr>
                <tr>
                    <th> equipo </th> <td> {{$Jugador->equipo_id}}</td>
                </tr>
            </table>
            <a href="{{route('jugador.edit',$Jugador->id)}}" class="button primary ">Editar</a>
            <a href="{{route('jugador.index')}}" class="button alert">Cancelar</a>
        </div>
    </div>
</div>
<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>
</body>
</html>
