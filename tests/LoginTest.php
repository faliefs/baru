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
             ->check('remember')
             ->type('agung@tes.com', 'email')
	         ->type('agung123','password')
	         ->press('Login')
	         ->seePageIs('/');
    }
}
