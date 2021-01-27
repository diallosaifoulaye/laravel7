<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class testApi extends Controller
{
    public function test(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos/');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        return $body;

    }
    public function test1(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos/');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        return $body;

    }
}
