<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use App\User;

class AsyncController extends Controller
{
	protected $client;
	
    function __construct(Client $client)
    {
    	$this->client=$client;
    }

    function save()
    {
        $user=User::where('USER_ID','KCA')->get();
        dd($user);

    	$time_start = microtime(true);

    	$promise=$this->client->getAsync('http://services.groupkt.com/state/get/IND/all');
	  	$response = $promise->wait();
		$stream=$response->getBody();
		$content=$stream->getContents();
		var_dump($content);
    
    	// Script you want to test here
		$time_end = microtime(true);
		$time = $time_end - $time_start;
		echo "Did hello in $time seconds\n";
    }

}
