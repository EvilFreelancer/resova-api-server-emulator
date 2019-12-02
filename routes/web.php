<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->get('/availability/calendar', function (\Illuminate\Http\Request $request) use ($router) {
        $start_date = $request->input('start_date');
        $json       = json_decode(file_get_contents(__DIR__ . '/../resources/json/availability_calendar.json'), false);

        return response()->json($json);
    });
});
