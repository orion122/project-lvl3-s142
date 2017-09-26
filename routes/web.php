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
use Illuminate\Http\Request;

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/


$router->get('/', function () use ($router) {
    return view('welcome');
});


$router->post('/domains', function (Request $request) {
    $this->validate($request, ['url' => 'active_url']);
});
