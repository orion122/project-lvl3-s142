<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabase()
    {
        $this->seeInDatabase('domains', [
                'id' => '1',
                'name' => 'http://ya.ru',
                'status_code' => '200',
                'content_length' => '10472',
                'created_at' => '2017-09-28 09:39:54',
                'updated_at' => null
            ]
        );
    }
}
