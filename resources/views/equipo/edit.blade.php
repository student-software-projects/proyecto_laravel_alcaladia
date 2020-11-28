<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Editar tu equipo</title>
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

<div class="container tabla ">
    <div class="row">
        <div class="col-md-6 medium-text-center">
            <h1 class="button success">Editar tu equipo</h1>
            <form action="{{route('equipo.update',$equipo->id)}}" method="post">
                    @csrf
                    @method('put')
                <table class="table ">
                    <tr>
                        <th>Nombre del equipo </th>
                        <td><input type="text" name="team_name" class="form-control" value="{{$equipo->team_name}}"></td>
                    </tr>

                    <tr>
                        <th>Logo </th>
                        <td><input type="text" name="logo" class="form-control" value="{{$equipo->logo}}"></td>
                    </tr>

                    <tr>

                        <th>localidad </th>
                        <td><input type="text" name="localidad_id" class="form-control" value="{{$equipo->localidad_id}}"></td>
                    </tr>
                </table>
                <a href="{{route('equipo.index')}}" class="button primary">Volver</a>
                <button type="submit" class="button warning">Guardar cambios </button>
            </form>
        </div>
    </div>
</div>


<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>

</body>
</html>

