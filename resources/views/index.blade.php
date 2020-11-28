<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('contenido/css/foundation.css')}}">
    <title class="title">Bienvenido</title>
</head>
<style>
    body{
        background-image: url("{{asset('contenido/imagenes/pelota-futbol.jpg')}}") ;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Montserrat', sans-serif;
    }

</style>

<body >

<div class="container"  >
     <div>
         <a class=" button warning float-center " href="#"  style="width: 600px"  >la mejor  liga de futbol</a>
     </div>

    <div class="grid-container">
        <div class="grid-x grid-margin-x small-up-2 medium-up-3">
            <div class="cell">
                <div class="card">
                    <img src="https://i.pinimg.com/236x/82/b5/88/82b588f575d321569e586b02e740261f--cartoon-city-stock-illustrations.jpg">
                    <div>
                    <div class="card-section">
                        <h4>Localidades</h4>
                        <p>Unete seguro aqui esta tu localidad.</p>
                        <a class="button primary" href="{{route('localidad.index')}}"> Ingresa aqui </a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="cell">
                <div class="card">
                    <img src="https://www.benditofutbol.com/files/article_main/uploads/2016/07/31/579e86e6c8ded.jpeg">
                    <div>
                    <div class="card-section">
                        <h4>Equipos</h4>
                        <p>Aqui estara tu equipo,esperandote.</p>
                        <a class="button primary" href="{{route('equipo.index')}}"> Ingresa aqui</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="cell">
                <div class="card">
                    <img src="https://image.freepik.com/vector-gratis/equipo-jugadores-futbol-agrupan-dibujos-animados_9026-22.jpg">
                    <div>
                    <div class="card-section">
                        <h4>Jugadores</h4>
                        <p>Unete campeón</p>
                        <a class="button primary" href="{{route('jugador.index')}}"> Ingresa aqui</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<script src="{{asset('contenido/js/foundation.js')}}" ></script>
<script src="{{asset('contenido/js/vendor.js')}}" ></script>
</body>

</html>
