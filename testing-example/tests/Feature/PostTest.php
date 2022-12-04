<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    
    use RefreshDatabase;

    public function test_fetching_postspage()
    {
        $response = $this->get('posts');

        $response->assertStatus(200);
        $response->assertSeeText('POSTS:');
    }

    public function test_createpost_validation_and_post_being_created()
    {

        $params = ['title'=>'post 1',
        'content'=>'this is post 1',];

         $response = $this->post('poststore',$params);
         $response->assertStatus(302);
         $response->assertRedirect('posts');

            
    }

    public function test_create_page_route()
    {
        $response = $this->get('postcreate');
        
        $response->assertStatus(200);
    }
}
