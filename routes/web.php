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

Route::get('/', function () {
    return view('main');
});

Route::get('/flight/{from}/{to}/{depart}/{return}', function (\App\Http\Controllers\TravelController $travel, $from, $to, $depart, $return) {
    $price = $travel->setPrice("plane", 15000);
    return view('flight');
});

Route::post('/make', function (\App\Http\Controllers\TravelController $travel) {
    $_POST['depart'] = str_replace('/', '-', $_POST['depart']);
    $_POST['return'] = str_replace('/', '-', $_POST['return']);

    return redirect("/flight/{$_POST['from']}/{$_POST['to']}/{$_POST['depart']}/{$_POST['return']}");
})->name('make-road');


