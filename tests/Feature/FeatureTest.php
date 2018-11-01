<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function testExample1()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function testExample2()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

}
