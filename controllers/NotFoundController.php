<?php
require_once 'Config/Parametros.php';

class NotFoundController {
	function index() {
		die( json_encode( [ "data" => "Request Not Found", "code" => "error" ] ) );
	}
}