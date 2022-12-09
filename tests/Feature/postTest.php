<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class postTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPostBeingCreated()
    {

        $params = [
             'title'=> 'reda reda',
             'content'=>'reda reda reda'
        ];
        $response = $this->POST('/Resourceposts/store',$params)
        ->assertRedirect('/Resourceposts');

    }
}
