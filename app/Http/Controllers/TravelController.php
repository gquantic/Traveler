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
         * ПОЛУЧАЕМ ДАННЫЕ
         */

        $get = array(
            'depart'  => 'Москва',
            'destination' => 'Краснодар'
        );

        $ch = curl_init('http://ecupay.ru/api/tours');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $tickets = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($tickets, true);
        $tickets = $response['data'];

        /**
            0 => array:17 [▼
                "id" => 3
                "route_number " => "5262"
                "route_depart_station " => "АС Анапа"
                "route_arrival_station " => "Остановка "Магнит""
                "route_departure_address " => "Красноармейская ул., 11, Анапа, Краснодарский край, 353440"
                "route_arrival_address " => "с. Витязево, ул. Колхозная, 34"
                "vehicle " => 2
                "vehicle_type " => null
                "vehicle_model_vehicle\t " => "НЕОПЛАН"
                "vehicle_gus_number_vehicle\t " => "О 562 РН 123"
                "driver\t" => "Федоров Петр"
                "driver_2 " => null
                "depart_time" => "13:00:00"
                "arrival_time" => "15:15:00"
                "departure_date" => "2022-03-17 00:00:00"
                "arrival_date" => "2022-03-17 00:00:00"
                "condition_tours" => "1"
            ]
         */

        /**
         * Преобразуем массив GET в строку для дальнейшей передачи
         */

        $paramsAtString = '';
//        foreach ($request->all() as $item) {
//            $paramsAtString = "$paramsAtString$item:";
//        }

        return view('tickets.search', compact('paramsAtString', 'tickets'));

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
