<?php

namespace gestion\WS;
use GuzzleHttp\Client;
use GuzzleHttp\Ring\Exception\ConnectException;
use GuzzleHttp\Exception\ClientException;

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
		try{
			$response = $this->client->request('GET', "docentes/{$rfc}", ['json' => ['pass' => "$pass"]]);
		}
		catch(ConnectException $ex){
			switch ( $ex->getMessage() ) {
        		case '7': // to be verified
            // handle your exception in the way you want,
            // maybe with a graceful fallback
        		$response = null;
            	break;
    		}
		}
		return $response;
	}
	//Función para consumir el webservices http://127.0.0.1:8080/wsgestioncurso/rest/alumnos/#numeroControl
	public function Alumno($noControl, $nip){
		try{
			$response = $this->client->request('GET', "alumnos/{$noControl}", ['json' => ['nip' => "$nip"]]);
		}
		catch(\GuzzleHttp\Exception\ClientException $ex){
			switch ( $ex->getMessage() ) {
        		case '7': // to be verified
            // handle your exception in the way you want,
            // maybe with a graceful fallback
        		$response = null;
            	break;
    		}
    		$response = null;
		}
		return $response;
	}

	public function Periodos(){
		try{
			$response = $this->client->request('GET', "periodos");
		}
		catch(ConnectException $ex){
			switch ( $ex->getMessage() ) {
        		case '7': // to be verified
            // handle your exception in the way you want,
            // maybe with a graceful fallback
        		$response = null;
            	break;
    		}
		}
		return $response;
	}

	public function Departamentos(){
		try{
			$response = $this->client->request('GET', "departamentos");
		}
		catch(ConnectException $ex){
			switch ( $ex->getMessage() ) {
        		case '7': // to be verified
            // handle your exception in the way you want,
            // maybe with a graceful fallback
        		$response = null;
            	break;
    		}
		}
		return $response;
	}

	public function Carreras(){
		try{
			$response = $this->client->request('GET', "carreras");
		}
		catch(ConnectException $ex){
			switch ( $ex->getMessage() ) {
        		case '7': // to be verified
            // handle your exception in the way you want,
            // maybe with a graceful fallback
        		$response = null;
            	break;
    		}
		}
		return $response;
	}

	public function Personal(){
		try{
			$response = $this->client->request('GET', "personal");
		}
		catch(ConnectException $ex){
			switch ( $ex->getMessage() ) {
        		case '7': // to be verified
            // handle your exception in the way you want,
            // maybe with a graceful fallback
        		$response = null;
            	break;
    		}
		}
		return $response;
	}

	public function Materias(){
		try{
			$response = $this->client->request('GET', "materias");
		}
		catch(ConnectException $ex){
			switch ( $ex->getMessage() ) {
        		case '7': // to be verified
            // handle your exception in the way you want,
            // maybe with a graceful fallback
        		$response = null;
            	break;
    		}
		}
		return $response;
	}

	public function Reticulas(){
		try{
			$response = $this->client->request('GET', "reticulas");
		}
		catch(ConnectException $ex){
			switch ( $ex->getMessage() ) {
        		case '7': // to be verified
            // handle your exception in the way you want,
            // maybe with a graceful fallback
        		$response = null;
            	break;
    		}
		}
		return $response;
	}

	public function Planes(){
		try{
			$response = $this->client->request('GET', "planes");
		}
		catch(ConnectException $ex){
			switch ( $ex->getMessage() ) {
        		case '7': // to be verified
            // handle your exception in the way you want,
            // maybe with a graceful fallback
        		$response = null;
            	break;
    		}
		}
		return $response;
	}

}

?>