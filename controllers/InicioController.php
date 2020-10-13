<?php 
    class InicioController {
        public function index() {
            die( json_encode( [ "data" => "Welcome to Api Structure. Let's GO!", "code" => "ok" ] ) );
        }
        public function param( $param ) {
            echo 'El valor del paramatro es:' . $param;
        }
    }