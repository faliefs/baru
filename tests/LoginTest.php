<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/login')
             ->type('agungtri91@gmail.com', 'email')
	         ->type('agungtri','password')
	         ->press('Login')
	         ->seePageIs('/');
    }
}
