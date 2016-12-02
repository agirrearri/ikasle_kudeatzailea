<?php
include_once 'Alumno.php';
$nuevo_alumno = json_decode($_POST['alumno']);
$alumno = new Alumno();
echo $alumno->alta($nuevo_alumno->nombre, $nuevo_alumno->apellido1, $nuevo_alumno->apellido2);
//echo ($nuevo_alumno->id . ' ' . $nuevo_alumno->nombre .' '. $nuevo_alumno->apellido1 . ' ' . $nuevo_alumno->apellido2 );
//print_r($nuevo_alumno);
echo "alumno agregado";
