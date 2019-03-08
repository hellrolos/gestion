<?php

namespace gestion\Http\Controllers;

use gestion\WS\SII;
use Illuminate\Http\Request;

class WebServiceController extends Controller
{

	protected $SIIws;

	public function __construct(SII $SII){
		$this->SIIws = $SII;
	}

    public function index()
    {
    	$rfc = "RURN840727TN1";
    	$pass = "RURN840727TN1";
		$response = $this->SIIws->Docente($rfc, $pass);
    	if($response->getStatusCode() == 200) {
    		$post = json_decode($response->getBody()->getContents(), true);
	    	return view('posts.index', compact('post'));
    	}
    	else {
    		return "Error: ".$statusCode;
    	}

	}
}
