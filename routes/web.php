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
use GuzzleHttp\Client;

$router->get('/', ['as' => 'index', function () use ($router) {
    return view('form');
}]);


$router->post('/domains', ['as' => 'store', function (Request $request) {
    $this->validate($request, ['url' => 'active_url']);

    $client = new Client(['base_uri' => $request['url']]);
    $response = $client->request('GET');
    $contentLengthArray = $response->getHeader('Content-Length');
    $contentLength = !empty($contentLengthArray) ? $contentLengthArray[0] : null;
    $statusCode = $response->getStatusCode();
    $body = (string) $response->getBody();

    $hasH1 = preg_match('/<h1.*>(.+)<\/h1>/U', $body, $tagH1);
    $hasMetaKeywords = preg_match('/<meta.+name="keywords".+content="(.+)".*>/U', $body, $tagMetaKeywords);
    $hasMetaDescription = preg_match('/<meta.+name="description".+content="(.+)".*>/U', $body, $tagMetaContent);

    $h1 = $hasH1 ? $tagH1[1] : null;
    $metaKeywords = $hasMetaKeywords ? $tagMetaKeywords[1] : null;
    $metaDescription = $hasMetaDescription ? $tagMetaContent[1] : null;

    $id = DB::table('domains')->insertGetId([
        'name' => $request['url'],
        'status_code' => $statusCode,
        'content_length' => $contentLength,
        'body' => $body,
        'h1' => $h1,
        'meta_keywords' => $metaKeywords,
        'meta_content' => $metaDescription,
        'created_at' => Carbon\Carbon::now()
    ]);

    return redirect()->route('show', ['id' => $id]);
}]);


$router->get('/domains/{id}', ['as' => 'show', function ($id) {
    $row = DB::table('domains')->where('id', $id)->first();
    return view('id')->with(['row' => $row]);
}]);


$router->get('/domains', ['as' => 'domains', function () {
    $domains = DB::table('domains')->paginate(5);
    return view('domains')->with(['row' => $domains]);
}]);
