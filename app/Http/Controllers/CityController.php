<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function __construct()
    {
        #$this->cities = DB::table('cities')->get();
    }

    public function exportCities($selected = "none")
    {
        foreach ($this->cities as $city) {
            if ($selected == $city->name) {
                echo "<option value='$city->name' selected>$city->name</option>";
            } else {
                echo "<option value='$city->name'>$city->name</option>";
            }
        }
    }
}
