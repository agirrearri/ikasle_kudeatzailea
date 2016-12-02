<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumno
 *
 * @author irakaslea
 */
class Alumno {

    //put your code here
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'instituto';
    private $mysqli;

    public function __construct() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
    }

    public function getAlumnos() {
        $select = "select * from ikasleak";
        $result = $this->mysqli->query($select);

        while ($fila = $result->fetch_array()) {
            $array_result[] = $fila;
        }
        return $array_result;
    }

    public function getAlumno($id) {
        $select = "select * from ikasleak where id=$id";
        $result = $this->mysqli->query($select);

        if ($result->num_rows == 1) {
            return $result->fetch_object();
        } else {
            return FALSE;
        }
    }

    public function alta($nombre, $apellido1, $apellido2) {
        try {
            $sql = "SELECT nombre FROM ikasleak WHERE nombre = '" . $nombre . "';";
            $res = $this->mysqli->query($sql);
            if (!empty($res->num_rows)) {
                throw new Exception("Ya existente en la BD");
            } else {
                $sql = "INSERT INTO ikasleak(nombre,apellido1, apellido2) VALUES('$nombre', '$apellido1', '$apellido2')";
                $res = $this->mysqli->query($sql);
            }
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public function baja($id) {
        try {
            $sql = "SELECT id FROM ikasleak WHERE id = ' $id '";
            $res = $this->mysqli->query($sql);
            if (empty($res->num_rows)) {
                throw new Exception("No existente en la BD");
            } else {
                $sql = "DELETE FROM ikasleak WHERE id = $id";
                $res = $this->mysqli->query($sql);
            }
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    
    public function eliminar_todos() {
        try {

                $sql = "DELETE FROM ikasleak";
                $res = $this->mysqli->query($sql);
          
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    
    

}
