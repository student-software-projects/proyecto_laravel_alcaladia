<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Crear localidad</title>
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
        height: 150vh;
        padding: 100px 500px;

    }
</style>

<body>
<div class="container tabla">
    <div class="row">
        <div class="col-md-4 mt-5">
            <h1 class="button warning">Crear localidad </h1>
            <form action="{{route('localidad.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="location">localidad</label>
                    <input type="text" name="location" id="location"  class="form-control" >
                </div>
                <hr>
                <button class='button primary'  > Crear localidad</button>
                <a href="{{route('localidad.index')}}"class="button alert" >Cancelar</a>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>

</body>
</html>
