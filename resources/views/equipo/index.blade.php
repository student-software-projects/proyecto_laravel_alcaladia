<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Equipos</title>
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
        <div class="col-md-12 medium-text-center">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <h1 class="button warning">Equipos</h1>
                    <div class="alert-success" role="alert">
                        {{session('message')}}
                    </div>
                    <div class="alert-danger" role="alert">
                        {{session('mesa')}}
                    </div>
                    <thead>
                    <tr>
                        <th>Nombre del equipo</th>
                        <th>Logo</th>
                        <th>localidad</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($equipo as $Equipo)
                        <tr>
                            <td>{{$Equipo->team_name }}</td>
                            <td>{{$Equipo->logo }}</td>

                            @foreach($localidad as $localidades)
                                @if($Equipo->localidad_id == $localidades->id)
                                    <td>{{$localidades->location}}</td>
                                @endif
                            @endforeach
                            <td>
                                <form action="{{route('equipo.destroy',$Equipo->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('equipo.show',$Equipo->id)}}"class="button warning">Detalles</a>
                                    <a href="{{route('equipo.edit',$Equipo->id)}}" class="button primary" >Editar</a>
                                    <button type="submit" class="button alert" >Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <td>
                <a href="{{route('equipo.create')}}"class="button primary" >Crear nuevo equipo </a>
                <a href="{{route('home.index')}}"class="button secondary" >Cancelar</a>
            </td>
        </div>
    </div>
</div>
<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>

</body>
</html>

