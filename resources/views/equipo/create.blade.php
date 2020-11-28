<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Crear equipo</title>
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
        padding: 500px 400px;

    }
</style>

<body>
<div class="container tabla">
    <div class="row">
        <div class="col-md-4 mt-5">
            <form action="{{route('equipo.store')}}" method="post">
                <h1 class="button success">Crear equipo</h1>
                @csrf
                <div class="form-group">
                    <label for="team_name">Nombre del equipo</label>
                    <input type="text" name="team_name" id="team_name"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="text" name="logo" id="logo"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="localidad_id">localidad</label>
                    <input type="text" name="localidad_id" id="localidad_id"  class="form-control" >
                </div>
                <hr>
                <button class='button primary'  > Crear equipo</button>
                <a href="{{route('equipo.index')}}"class="button alert">Cancelar</a>
            </form>
        </div>
    </div>
</div>


<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>


</body>
</html>
