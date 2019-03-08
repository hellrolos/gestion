<?php

namespace gestion\WS;
use GuzzleHttp\Client;

//Clase creada para interactuar con Guzzle, el plugin para consumir WebServices
class SII{
	//Variable para almacenar las configuraciones y el objeto de guzzle.
	protected $client;
	//En el constructor inicializamos el objeto para los webservices.
	public function __construct(Client $client){
		$this->client =	$client;
	}
	//Función para consumir el webservices http://127.0.0.1:8080/wsgestioncurso/rest/docentes/#RFC
	public function Docente($rfc, $pass){
		$response = $this->client->request('GET', "docentes/{$rfc}", ['json' => ['pass' => "$pass"]]);
		return $response;
	}
	//Función para consumir el webservices http://127.0.0.1:8080/wsgestioncurso/rest/alumnos/#numeroControl
	public function Alumno($noControl, $nip){
		$response = $this->client->request('GET', "alumnos/{$noControl}", ['json' => ['nip' => "$nip"]]);
		return $response;
	}

}

?>