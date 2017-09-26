<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class MainPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        /*$this->assertEquals(
            $this->response->getContent(), $this->response->getContent()
        );*/
        $this->assertResponseOk();
    }
}
