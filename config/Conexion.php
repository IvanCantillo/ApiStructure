<?php
class Conexion{

    public static function Conectar() {

        include __DIR__ . "/Datos.php";
        $datos = $CONEXION['desarrollo'];

        $con = "mysql:host={$datos['host']};dbname={$datos['db']}";
        try {
            $conexion = new PDO($con, $datos['user'], $datos['pass']);
        } catch (Exception $e) {
            die( json_encode([ "data" => "Error trying to connect to database", "code" => "error" ]) );
        }
        return $conexion;
    }

}