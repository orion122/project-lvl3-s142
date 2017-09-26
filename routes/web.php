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
use Illuminate\Support\Facades\DB;

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/


$router->get('/', function () use ($router) {
    return view('welcome');
});


$router->post('/domains', function (Request $request) {
    $this->validate($request, ['url' => 'active_url']);

    DB::table('domains')->insert([
        'name' => $request['url'],
        'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
    ]);

    $id = DB::table('domains')->where('name', $request['url'])->value('id');
});


