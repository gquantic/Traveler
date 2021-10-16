<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    private $price = [
        'train' => 1500,
        'plane' => 2000
    ];

    public function setPrice($type, $price)
    {
        $this->price[$type] = $price;
        return $this->price;
    }
}
