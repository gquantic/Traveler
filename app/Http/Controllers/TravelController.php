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

    public function makeRoad(Request $request)
    {
        if (isset($request->moreInfo) && $request->moreInfo == "true") $moreInfo = true;
        elseif (!isset($request->moreInfo) || $request->moreInfo != "true") $moreInfo = false;

        $request->session()->put('params', $_GET);
        $request->session()->put('self', 'Okay bro)))');

        /**
         * Преобразуем массив GET в строку для дальнейшей передачи
         */
        $paramsAtString = '';
//        foreach ($request->all() as $item) {
//            $paramsAtString = "$paramsAtString$item:";
//        }

        return view('tickets.search', compact('paramsAtString'));

        /**
         *  @var boolean checkbox => no
         *  @var string  from => "Ростов-на-Дону"
         *  @var string  from_detals => null
         *  @var string  where => "Метро Павелецкая"
         *  @var string  fromtime => "2022-03-13"
         *  @var string  total_count => "no"
         *  @var string  backtime => null
         */
    }
}
