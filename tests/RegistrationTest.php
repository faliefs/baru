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
	         ->type('Agung Tri Wibowo', 'name')
 	 	     ->type('agungtri91@gmail.com', 'email')
	         ->type('agungtri','password')
	         ->type('agungtri','password_confirmation')
	         ->press('Register')
	         ->seePageIs('/');
    }
}
