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
	         ->type('farhan', 'name')
 	 	     ->type('farhan@tes.com', 'email')
	         ->type('farhan123','password')
	         ->type('farhan123','password_confirmation')
	         ->press('Register')
	         ->seePageIs('/');
    }
}
