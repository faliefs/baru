<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/register')
	         ->type('pedro', 'name')
 	 	     ->type('pedro@tes.com', 'email')
	         ->type('pedro123','password')
	         ->type('pedro123','password_confirmation')
	         ->press('Register')
	         ->seePageIs('/');
    }
}
