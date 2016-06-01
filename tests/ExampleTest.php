<?php

use Illuminate\Foundation\Testing\WithoutMiddleware; //session
use Illuminate\Foundation\Testing\DatabaseMigrations; 
use Illuminate\Foundation\Testing\DatabaseTransactions; //upload

class ExampleTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Welcome');
             
    }
}
