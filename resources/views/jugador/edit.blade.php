<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Editar jugador</title>
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
            <form action="{{route('jugador.update',$Jugador->id)}}" method="post">
                @csrf
                @method('put')
                <table class="table ">
                    <tr>
                        <th>Nombres</th>
                        <td><input type="text" name="name" class="form-control" value="{{$Jugador->name}}"></td>
                    </tr>

                    <tr>
                        <th>Apellidos</th>
                        <td><input type="text" name="lastname" class="form-control" value="{{$Jugador->lastname}}"></td>
                    </tr>

                    <tr>
                        <th>Numero de camisa</th>
                        <td><input type="text" name="shirt_name" class="form-control" value="{{$Jugador->shirt_name}}"></td>
                    </tr>

                    <tr>
                        <th>Apodo</th>
                        <td><input type="text" name="nickname" class="form-control" value="{{$Jugador->nickname}}"></td>
                    </tr>

                    <tr>

                        <th>Equipo </th>
                        <td><input type="text" name="equipo_id" class="form-control" value="{{$Jugador->equipo_id}}"></td>
                    </tr>
                </table>
                <a href="{{route('jugador.index')}}" class="button primary ">Volver</a>
                <button type="submit" class="button alert">Guardar cambios </button>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>
</body>
</html>

