<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ApiController;

class TravelController extends Controller
{
    private $price = [
        'train' => 1500,
        'plane' => 2000
    ];

    public function __construct()
    {
        $this->api = new ApiController();
    }

    private function getTickets()
    {

    }

    public function setPrice($type, $price)
    {
        $this->price[$type] = $price;
        return $this->price;
    }

    public function makeRoad()
    {
        if (isset($_GET['moreInfo']) && $_GET['moreInfo'] == "true") $moreInfo = true;
        elseif (!isset($_GET['moreInfo']) || $_GET['moreInfo'] != "true") $moreInfo = false;

        $request = $this->api->query('Bus', 'Search/RacePricing');

        dd($request);

//        return view('form-order', ['cityController' => CityController::class, 'data' => [$_GET['from'], $moreInfo]]);
    }
}
