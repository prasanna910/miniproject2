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
        $user = new User();
        $user->name = "Prasanna Haresh Patil";
        $user->email = "prasanna@gmail.com";
        $user->password = "123456";
        $this->assertTrue($user->save());
    }
}
