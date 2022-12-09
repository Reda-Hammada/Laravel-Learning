<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImagesTest extends TestCase
{   
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testImagePage()
    {

        $response = $this->post('/Image.store',[
                'path'=> 'jLtNeqmqhKGa1riGwaLqQ8LSnXeRtkbwvB5fqtNs.jpg',
        ]);

        $response->assertStatus(302);
    }


}
