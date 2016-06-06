<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserTest extends TestCase
{
    public function testExample(){
        $user = factory(App\User::class)->create();
        $this->actingAs($user)
             ->withSession(['foo' => 'bar'])
             ->visit('/')
             ->see($user->name);
    }
}