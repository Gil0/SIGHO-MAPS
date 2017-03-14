@extends('layouts.app')

@section('content')
<style>
    @import url('http://fonts.googleapis.com/css?family=Julius+Sans+One');
    @import url('https://fonts.googleapis.com/css?family=Anton');
    body{
        padding: 0;
        margin: 0;
        font-family: 'Julius Sans One', sans-serif;
    }
    .parallax { 
        height: 500px;
        background-image: url(../Imagenes/bg.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
    }
    .parallax1 { 
        background-image: url(../Imagenes/oficina.jpg);
        height: 350px; 
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .parallax2{ 
        background-image: url(../Imagenes/bg.jpg);
        height: 200px; 
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .about{
        color: #000;
        font-size: 15px;
        background: #fff;
        text-align: justify;
        padding: 0px 80px;
    }
    .equipo{
        color: #fff;
        font-size: 15px;
        background: #282E34;
        text-align: justify;
        padding: 50px 80px;
    }
    .acerca{
        text-align: center;
        font-weight: lighter;
        color: #06bb84;
    }
    .Team{
        position: relative;
        left: 0;
        top: 40%;
        width: 100%;
        text-align: center;
        color: #000;
    }
    .x{
        background-color: #000;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 10px;
    }
    footer{
        background: #282E34;
        color: #fff;
        text-align: center;
        padding: 5px;
    }
    hr{
        border-color: #06bb84;  
    }
    .list{
        padding: 50px;
    }
    .Nomt{
        color: #06bb84;
        text-align: center;
    }
    .inf{
        text-align: justify;
        font-size: 12px;
    }
    .acer{
        text-align: justify;
        font-size: 13px;
    }
    .logo{
        position: relative;
        margin-left: 43%;
        width: 15%;
    }
    .portada{
        color: #fff;
        font-size: 70px;
        font-family: 'Anton', sans-serif;
        letter-spacing: 3px;
        text-align: center;
    }
    .yi{
        color: #06bb84;
        font-family: 'Anton', sans-serif;
        text-align: center;
    }
    .sig{
        color: #fff;
        text-align: center;
        font-size: 20px;
    }
    .nav1{
        color: #fff;
    }
    .select{
        background-color: #06bb84;
        border-radius: 3px;
    }
    .login{
        position: inherit;
        float: right;
    }
    .conten{
        color: #000;
        font-size: 15px;
        background: #fff;
        text-align: center;
    }
    .conten1{
        font-size: 20px;
        color: #06bb84;
    }
    .color{
        background: #06bb84;
    }
</style>
<div class="parallax">
    <div class="container">
        <img class="logo" src="../Imagenes/Logo.png">
    </div>
    <div class="container">
        <ul class="nav nav-pills">
          <li class="select "><a class="nav1"href="{{ url('User/Home') }}">Inicio</a></li>
          <li><a class="nav1"href="#">Horario</a></li>
          <li><a class="nav1"href="{{ url('User/Profesores') }}">Profesores</a></li>
          <li><a class="nav1"href="#">Mapas</a></li>
        </ul>
    </div>
    <hr/>
    <br/>
    <br/>
    <br/>
    <div class="container">
        <h1 class="portada">SIGHO <span class="yi">&</span> MAPS</h1>
        <p class="sig">Sistema de Gestion de Horarios y Mapas</p>
    </div>
</div>
<div class="container col-md-12 about" >
    <div class="col-md-8">
        <h1 class="acerca">ACERCA DE</h1>
        <hr/>
        <p class="acer">SIGHO & MAPS es una aplicación que ayuda a la gestión de asignaturas de acuerdo a la división de estudios superiores en Ingeniería y Tecnología a la que pertenecen las carreras de la Facultad de Ciencias de la Computación(FCC).</p>
        <br>
        <p class="acer">Esto es para que los alumnos de la facultad hagan de una manera ágil y sencilla la elección de sus materias, así como brindarles infromación de los profesores disponibles y los horarios en los que impartiran dicha clase, con ello se pretende brindarles un panorama más amplio acera de los profesores para que los mismos alumnos tomen una decisión correcta.</p>
        <hr/>
    </div>
    <div class="col-md-4">
        <center><img class="list" src="../Imagenes/List.png"></center>
    </div>
</div>
<div class="cantainer col-md-12 parallax1"></div>
<div class="cantainer col-md-12 equipo" >
    <h1 class="acerca">EQUIPO DE TRABAJO</h1>
    <div class="container">
        <div class="col-md-6">
            <center><img src="../Imagenes/Team.png"></center>
        </div>
        <div class="col-md-6">
            <h2 class="Nomt">Rafael</h2>
            <p class="inf">Estudiante de sexto cuatrimestre de la carrera en Ingenieria en Tecnologias de la Información en la Facultad de Ciencias de la computación.</p>
            <p class="inf">Me agradan los temas relacionados con tecnologia y el aprender cosas nuevas. La informatica y fotografia son uno de mis hobbies favoritos.</p>
            <p class="inf">Conocimientos</p>
            <p class="inf">-C & C++</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-JavaScript</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-Java</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-PHP</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div> 
            <p class="inf">-HTML & CSS</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div> 
            <p class="inf">-SQL</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="container">
        <div class="col-md-6">
            <h2 class="Nomt">Alfredo</h2>
            <p class="inf">Estudiante de sexto cuatrimestre de la carrera en Ingenieria en Tecnologias de la Información en la Facultad de Ciencias de la computación.</p>
            <p class="inf">Me agradan los temas relacionados con tecnologia, deportes y cine.</p>
            <p class="inf">Conocimientos</p>
            <p class="inf">-C & C++</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-HTML & CSS</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-JavaScript</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-Java</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-PHP</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-SQL</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <center><img src="../Imagenes/Team.png"></center>
        </div>
    </div>
    <hr/>
    <div class="container">
        <div class="col-md-6">
            <center><img src="../Imagenes/Team.png"></center>
        </div>
        <div class="col-md-6">
            <h2 class="Nomt">Angel Emmanuel</h2>
            <p class="inf">Estudiante de sexto cuatrimestre de la carrera en Ingenieria en Tecnologias de la Información en la Facultad de Ciencias de la computación.</p>
            <p class="inf">Me agradan los temas relacionados con tecnologia y deportes.</p>
            <p class="inf">Conocimientos</p>
            <p class="inf">-C & C++</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-HTML & CSS</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-JavaScript</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-JQuery</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-PHP</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-SQL</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
        </div>
    </div>
    <hr/> 
    <div class="container">
        <div class="col-md-6">
            <h2 class="Nomt">Irvin</h2>
            <p class="inf">Estudiante de sexto cuatrimestre de la carrera en Ingenieria en Tecnologias de la Información en la Facultad de Ciencias de la computación.</p>
            <p class="inf">Me gustan las artes marciales, la historia y su relación con la humanidad y el cine.</p>
            <p class="inf">Conocimientos</p>
            <p class="inf">-C & C++</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-JavaScript</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-Java</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-PHP</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div> 
            <p class="inf">-HTML & CSS</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div> 
            <p class="inf">-SQL</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <center><img src="../Imagenes/Team.png"></center>
        </div>
    </div>
    <hr/>
    <div class="container">
        <div class="col-md-6">
            <center><img src="../Imagenes/Team.png"></center>
        </div>
        <div class="col-md-6">
            <h2 class="Nomt">Juan Carlos</h2>
            <p class="inf">Estudiante de sexto cuatrimestre de la carrera en Ingenieria en Tecnologias de la Información en la Facultad de Ciencias de la computación.</p>
            <p class="inf">Me agradan los temas relacionados con el dibujo, diseño y me apasiona el fisicoculturismo.</p>
            <p class="inf">Conocimientos</p>
            <p class="inf">-C & C++</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-HTML & CSS</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <span class="sr-only">100% Complete</span>
                </div>
            </div>
            <p class="inf">-JavaScript</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-Java</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-PHP</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
            <p class="inf">-SQL</p>
            <div class="progress">
                <div id="bar" class="progress-bar color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    <span class="sr-only">90% Complete</span>
                </div>
            </div>
        </div>
    </div>    
</div>
<div class="cantainer col-md-12 parallax2">
    <div class="Team">
        <span class="x">¡MIND-IT!</span>
    </div>
</div>
<footer class="col-md-12">
    <p>SIGHO & MAPS 2017 - Todos los derechos reservados.</p>
</footer>
@endsection