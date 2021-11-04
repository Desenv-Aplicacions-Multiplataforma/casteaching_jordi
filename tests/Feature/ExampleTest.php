<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VideoTest extends TestCase
{
    /**
     * @test
     */
    public function users_can_view_videos()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
