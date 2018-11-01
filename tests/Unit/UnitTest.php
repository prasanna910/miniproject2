<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new  User();
        $user->name = "Dhawal";
        $user->email = "Dhawal@gmail.com";
        $user->password = 'qwerty';
        $user->save();
        $this->assertTrue($user->delete());
    }

}
