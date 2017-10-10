<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class DomainsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
    }

    public function tearDown()
    {
        Artisan::call('migrate:reset');
        parent::tearDown();
    }


    public function testApplication()
    {
        $url = 'http://ya.ru';
        $statusCode = '200';
        $contentLength = '1';
        $body = 'a';
        $time = Carbon\Carbon::now();

        DB::table('domains')->insertGetId([
            'name' => $url,
            'status_code' => $statusCode,
            'content_length' => $contentLength,
            'body' => $body,
            'created_at' => $time
        ]);

        $this->get("/domains");
        $this->assertResponseOk();
    }
}
