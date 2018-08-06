<?php

use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\ApplyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('checkAvailability', 'AvailabilityController@check');
Route::post('apply', 'ApplyController@exec');
