<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class PlaybackControllerTest extends TestCase
{
    use RefreshDatabase;
     
    public function test_modelExists()
    {
$response = $this->call("POST", "newplayback", [
    "trackId" =>  "2131232Sg",
    "userId" => "joseTestUser",
    "agent" => "webTest"

]);

$response->assertStatus($response->status(), 201 );
    }
}
