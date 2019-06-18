<?php

use App\Pupil;
use Illuminate\Http\Request;

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

// Render the terminal for the bus driver
Route::get('client', function () {
	return view('client');
});

// API - retrieve the pupil data
Route::get('pupils', function (Request $request) {

	$routeNumber = $request->input('route');
    
    return Pupil::whereRouteNumber($routeNumber)->get();

});











