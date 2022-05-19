<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PlaybackTest extends TestCase
{
    use WithoutMiddleware;
    public  function test_send_information_to_node()
    {
        
       $this->withoutExceptionHandling();

        $response = $this->getJson('api/countplaybacks');
        $response->assertStatus(201);
    
    }

}
