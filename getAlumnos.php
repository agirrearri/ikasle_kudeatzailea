<?php
include_once 'Alumno.php';
$alumno = new Alumno();
print (json_encode($alumno->getAlumnos()));