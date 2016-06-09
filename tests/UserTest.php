<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    public function testExample(){
        $user = factory(App\User::class)->create([
            'name' => 'agung',
            'email' => 'agung@tes.com',
            'password' => 'agung123',
        ]);
        $this->actingAs($user);
        $this->action('GET', 'HomeController@index');
        $response = $this->call('GET', '/home');
    }
}