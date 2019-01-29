<?php

namespace gestion\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WebServiceController extends Controller
{
    public function index()
    {
    	$client = new Client([
	    	// Base URI is used with relative requests
	    	'base_uri' => 'https://jsonplaceholder.typicode.com',
	    	// You can set any number of default request options.
	    	'timeout'  => 2.0,
		]);
		$response = $client->request('GET', 'posts');
		$posts = json_decode( $response->getBody()->getContents() );
	    return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
    	// return view('login');
    	$client = new Client([
	    	// Base URI is used with relative requests
	    	'base_uri' => 'https://jsonplaceholder.typicode.com',
	    	// You can set any number of default request options.
	    	'timeout'  => 2.0,
		]);
		$response = $client->request('GET', "posts/{$id}");
		$post = json_decode( $response->getBody()->getContents() );
	    return view('posts.show', compact('post'));
    }
}
