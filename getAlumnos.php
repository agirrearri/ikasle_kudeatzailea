<?php

include_once 'Alumno.php';
$alumno = new Alumno();
if(true){
    echo("nok");
}else{
    print (json_encode($alumno->getAlumnos()));
}
