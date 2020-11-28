<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title>Jugador</title>
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
        padding: 500px 400px;

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
                    <div class="alert-danger" role="alert">
                        {{session('mesa')}}
                    </div>
                    <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Numero de camisa</th>
                        <th>Apodo</th>
                        <th>Equipo</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Jugador as $Jugador)
                        <tr>
                            <td>{{$Jugador->name }}</td>
                            <td>{{$Jugador->lastname}}</td>
                            <td>{{$Jugador->shirt_name}}</td>
                            <td>{{$Jugador->nickname}}</td>

                            @foreach($equipo as $equipos)
                                @if($Jugador->equipo_id == $equipos->id)
                                    <td>{{$equipos->team_name}}</td>
                                @endif
                            @endforeach
                            <td>
                                <form action="{{route('jugador.destroy',$Jugador->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('jugador.show',$Jugador->id)}}"class="button warning">Detalles</a>
                                    <a href="{{route('jugador.edit',$Jugador->id)}}" class="button primary" >Editar</a>
                                    <button  class="button alert" >Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <td>
                <a href="{{route('jugador.create')}}"class="button primary" >Crear nuevo jugador </a>
                <a href="{{route('home.index')}}"class="button secondary" >Cancelar</a>
            </td>
        </div>
    </div>
</div>
<script src="{{asset('contenido/js/foundation.js')}}"></script>
<script src="{{asset('contenido/js/vendor.js')}}"></script>
</body>
</html>

