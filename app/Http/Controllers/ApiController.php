<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\This;

class ApiController extends Controller
{
    /**
     * Данные API
     * @var string[]
     */
    private $data = [
        'url' => 'http://api.travelpayouts.com/v1',
        'token' => 'cac6cf90e7f3eb6f334f20b75433253b',
        'mark' => '35242',
    ];

    /**
     * @var array
     */
    private $readyArray = array();

    /**
     * Construct
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param $cell
     * @param $data
     * @return void
     */
    protected function setData($cell, $data)
    {
        $this->data[$cell] = $data;
    }

    public function init($params)
    {
        $this->query("none", "none", "none", $params);
    }

    /**
     * @param $id
     * @param $object
     * @param $method
     * @param $params
     * @return array
     */
    public function query($id, $object, $method, $params): array
    {
        $signature = $this->generateSignature($params);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "{$this->url}/$object/$id/clicks/$method.json",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                "pos: {$this->data['login']}",
                "Content-Type: application/json",
                "Authorization: Basic {$this->data['password']}"
            ),
        ));

        return [
            'status' => $response = curl_exec($curl)
        ];
    }

    /**
     * @param $params
     * @return void
     */
    private function generateSignature($params)
    {
        $params = $this->compileToOnlyArray($params);

        sort($params, SORT_STRING);
        $signature = "";

        $string = $this->generateStringForSignature($params);

        dd($string);
    }

    /**
     * @param $array
     * @return array
     */
    private function compileToOnlyArray($array): array
    {
        foreach ($array as $item) {
            if (is_array($item)) {
                return $this->compileToOnlyArray($item);
            }

            $this->readyArray[] = $item;
        }

        return $this->readyArray;
    }

    /**
     * @param $params
     * @return string|void
     */
    private function generateStringForSignature($params)
    {
        $string = "";

        foreach ($params as $param) {
            if (is_array($string)) {
                return $this->generateStringForSignature($param);
            }

            $string = $string."$param:";
        }

        if (substr($string, -1) == ':') {
            $string = substr($string, 0, -1);
        }

        return md5($string);
    }
}
