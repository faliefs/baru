<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
	use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->withSession(['foo' => 'bar'])
             ->visit('/');
    }
}
