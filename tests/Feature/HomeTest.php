<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_HomePageIsWorkingCorrectly()
    {
        $response = $this->get('/');

        $response->assertSeeText('Home Page');
    }

    public function test_AboutPageIsWorkingCorrectly()
    {

        $response = $this->get('/about');

        $response->assertSeeText(' services');
    }


}
