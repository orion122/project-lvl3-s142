<?php
//
//use Laravel\Lumen\Testing\DatabaseMigrations;
//use Laravel\Lumen\Testing\DatabaseTransactions;
//use Illuminate\Support\Facades\DB;
//use GuzzleHttp\Client;
//
//class DomainsPageTest extends TestCase
//{
//    /**
//     * A basic test example.
//     *
//     * @return void
//     */
//    public function testExample()
//    {
//        $url = 'http://ya.ru';
////        $client = new Client(['base_uri' => $url]);
////        $response = $client->request('GET');
////        $contentLengthArray = $response->getHeader('Content-Length');
////        $contentLength = !empty($contentLengthArray) ? $contentLengthArray[0] : null;
////        $statusCode = $response->getStatusCode();
////        $body = (string) $response->getBody();
////        $time = Carbon\Carbon::now();
//
//        $statusCode = '200';
//        $contentLength = '1';
//        $body = 'a';
//        $time = Carbon\Carbon::now();
//
//        $id = DB::table('domains')->insertGetId([
//            'name' => $url,
//            'status_code' => $statusCode,
//            'content_length' => $contentLength,
//            'body' => $body,
//            'created_at' => $time
//        ]);
//
//        $page = intval($id / 5);
//
//        $this->get("/domains?page=$page");
//
//        /*$list = "<td>$id</td>
//                        <td><a href=\"domains/$id\">$url</a></td>
//                        <td>$statusCode</td>
//                        <td>$contentLength</td>
//                        <td>$time</td>
//                        <td></td>";
//
//        $this->assertContains($list, $this->response->getContent());*/
//
//        $this->assertResponseOk();
//    }
//}
