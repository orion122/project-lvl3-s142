<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class DomainsTest extends TestCase
{
    public function setUp()
    {
        putenv('DB_CONNECTION=testing');
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
        DB::table('domains')->insert([
            'name' => 'http://ya.ru',
            'status_code' => '200',
            'body' => 'body'
        ]);

        $this->seeInDatabase('domains', [
                'id' => '1',
                'name' => 'http://ya.ru',
                'status_code' => '200'
            ]);
    }
}
