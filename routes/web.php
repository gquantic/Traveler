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

Route::view('/about', 'about')->name('about');
Route::view('/composite-tickets', 'tickets.composite')->name('tickets.composite');
Route::view('/help', 'help')->name('help');
Route::view('/contacts', 'contacts')->name('contacts');
//Route::view('/review', 'tickets.review')->name('review');

// Route::get('/make-road/{from}/{more}', function (\App\Http\Controllers\TravelController $travel,
//                                                  App\Http\Controllers\CityController $cityController, $from, $more) {
//     $price = $travel->setPrice("plane", 15000);
//     return view('flight', ['data' => [$from, $more], 'cityController' => $cityController]);
// });

Route::get('/race/{id}', function ($id) {
    return view('tickets.race', ['race' => $id]);
});

Route::get('/api', function (\App\Http\Controllers\ApiController $api) {
    return view('api', ['api' => $api]);
});

Route::get('/order', [\App\Http\Controllers\TravelController::class, 'makeRoad'])->name('make-road');

//Route::get('/road/make/{with}/{params}', function ($with, $params) {
//    dd(explode(':', $params));
//})->name('make-road');

Route::get('/road/make/{with}', function ($with) {
    /**
     * ПОЛУЧАЕМ ДАННЫЕ
     */

    $ch = curl_init("http://ecupay.ru/api/tours/$with");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $tickets = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($tickets, true);
    $ticket = $response['data'];

    return view('tickets.composite', compact('with', 'ticket'));
});


Route::get('/road/make/order/{with}', function ($with) {
    /**
     * ПОЛУЧАЕМ ДАННЫЕ
     */

    $ch = curl_init("http://ecupay.ru/api/tours/$with");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $tickets = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($tickets, true);
    $ticket = $response['data'];

    return view('tickets.review', compact('with', 'ticket'));
});

Route::get('test', function (\App\Http\Controllers\ApiController $apiController) {
    $apiController->init(["param1", "ost1", "a1", "c3",  ['f1' => ['g', 'e'], 'a2']]);
});
