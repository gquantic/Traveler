<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    private $data = [
        'url' => 'https://api-test.onelya.ru',
        'login' => 'ecupay@srcf.ru',
        'password' => '26052003'
    ];

    public function __construct()
    {
        $this->client = new Client();
    }

    protected function setData($cell, $data)
    {
        $this->data[$cell] = $data;
    }

    public function query($object, $method)
    {
//        $response = $this->client::acceptJson()->post("{$this->data['url']}/$object/V1/$method", ['query' => [
//            'login' => $this->data['login'],
//            'password' => $this->data['password'],
//        ]]);

        $response = Http::withHeaders([
            'Content-Type: application/json'
        ])->withBasicAuth($this->data['login'], $this->data['password'])->post("{$this->data['url']}/$object/V1/$method", ['query' => [
            'login' => $this->data['login'],
            'password' => $this->data['password'],
        ]]);

        return [
            'status' => $response->getStatusCode(),
//            'header' => $response->getHeader(),
            'body' => $response->getBody(),
        ];
    }
}
