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
	         ->type('agung', 'name')
 	 	     ->type('agung@tes.com', 'email')
	         ->type('agung123','password')
	         ->type('agung123','password_confirmation')
	         ->press('Register')
	         ->seePageIs('/');
    }
}
