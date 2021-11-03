<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (\App\Http\Controllers\CityController $cityController) {
    return view('main', ['cityController' => $cityController]);
});

Route::get('/make-road/{from}/{more}', function (\App\Http\Controllers\TravelController $travel,
                                                 App\Http\Controllers\CityController $cityController, $from, $more) {
    $price = $travel->setPrice("plane", 15000);
    return view('flight', ['data' => [$from, $more], 'cityController' => $cityController]);
});

Route::post('/order', function (\App\Http\Controllers\TravelController $travel, App\Http\Controllers\CityController $cityController) {
    if (isset($_POST['moreInfo']) && $_POST['moreInfo'] == "true") $moreInfo = true;
    elseif (!isset($_POST['moreInfo']) || $_POST['moreInfo'] != "true") $moreInfo = false;

    return view('form-order', ['cityController' => $cityController, 'data' => [$_POST['from'], $moreInfo]]);
})->name('make-road');
