<?php
include_once 'Alumno.php';

//recivir datos del cliente
$nuevo_alumno = json_decode($_POST['alumno']);

//creo el objeto alumno
$alumno = new Alumno();

//inserto en la BBDD
$alumno->alta($nuevo_alumno->nombre, $nuevo_alumno->apellido1, $nuevo_alumno->apellido2);

echo $nuevo_alumno->nombre . " agregado";
