<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Editar la localidad</title>
</head>

<style>
    body {
        background-image: url("{{asset('contenido/imagenes/img3.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    }
    .tabla{
        display: flex;
        align-items: center;
        height: 150vh;
        padding: 100px 500px;

    }
</style>

<body>

<div class="container tabla">
    <div class="row">
        <div class="col-md-6 medium-text-center">
            <h1 class="button warning" > Editar la localidad</h1>
            <form action="{{route('localidad.update',$localidad->id)}}" method="post">
             <table class="table ">
                    @csrf
                    @method('put')
                <tr>
                    <th> localidad </th>
                    <td><input type="text" name="location" class="form-control" value="{{$localidad->location}}"></td>
                </tr>
             </table>
                <a href="{{route('localidad.index')}}" class="button primary ">Volver</a>
            <button type="submit" class="button alert">Guardar cambios </button>
                </form>
        </div>
    </div>
</div>

<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>

</body>
</html>
