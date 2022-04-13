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

        $ch = curl_init('http://ecupay.ru/api/tours');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $tickets = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($tickets, true);
        $tickets = $response['data'];

//        dd($tickets);

        /**
            array:21 [▼
                "id" => 1
                "route_number" => "Рейс S7?2141"
                "route_depart_station" => "Домодедово, DME"
                "route_arrival_station" => "Гумрак, VOG"
                "route_departure_address" => "Волгоград"
                "route_arrival_address" => "Москва"
                "vehicle" => 1
                "vehicle_type" => "Авиа"
                "vehicle_model_vehicle" => "Airbus A320"
                "vehicle_gus_number_vehicle" => "1231223"
                "driver" => "Пилот"
                "driver_2" => "Пилот 2"
                "price" => "3102"
                "price_child" => "3102"
                "price_bag" => "3122"
                "depart_time" => "08:45"
                "arrival_time" => "10:35"
                "departure_date" => "01.03.22"
                "arrival_date" => "01.03.22"
                "condition_tours" => "1"
                "duration" => "1:50"
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
