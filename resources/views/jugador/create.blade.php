<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Crear jugador</title>
</head>

<style>
    body {
        background-image: url("{{asset('contenido/imagenes/img9.jpg')}}");
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
        <div class="col-md-4 mt-5">
            <form action="{{route('jugador.store')}}" method="post">
                <h1 class="button warning">Crear jugador</h1>
                @csrf
                <div class="form-group">
                    <label for="name">Nombres</label>
                    <input type="text" name="name" id="name"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="lastname">Apellidos</label>
                    <input type="text" name="lastname" id="lastname"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="shirt_name">Numero de la camisa</label>
                    <input type="text" name="shirt_name" id="shirt_name"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="nickname">Apodo</label>
                    <input type="text" name="nickname" id="nickname"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="equipo_id">localidad</label>
                    <input type="text" name="equipo_id" id="equipo_id"  class="form-control" >
                </div>
                <hr>
                <button class='button primary'  > Crear jugador</button>
                <a href="{{route('jugador.index')}}"class="button secondary" >Cancelar</a>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>
</body>
</html>

