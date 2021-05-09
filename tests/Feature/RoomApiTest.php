<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoomApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFullList()
    {
        // run seeder to insert all  data
        $this->seed();

        //test room api
        $response = $this->get('/api/rooms');

        //ensure that status code ==200
        $response->assertStatus(200);

        //ensure that basic objects are returned from api
        $response->assertJson([
            "success"=> true,
            "response_code"=> 200,
            "message"=> "list loaded successfully",
        ]);

        //ensure that api after our case returned only 5 rooms
        $response->assertJsonPath('data.total', 5);

        //ensure that the cheapest room price on our case == 142
        $json = $response->json();
        $this->assertEquals(142, $json['data']['data'][0]['total_price']);

        //ensure that the last room price on our case == 165
        $this->assertEquals(165, $json['data']['data'][4]['total_price']);

    }

    public function testEmptyList()
    {
        //test room api
        $response = $this->get('/api/rooms');

        //ensure that status code ==200
        $response->assertStatus(200);

        //ensure that basic objects are returned from api
        $response->assertJson([
            "success"=> true,
            "response_code"=> 200,
            "message"=> "list loaded successfully",
        ]);

        //ensure that api after our case returned only 5 rooms
        $response->assertJsonPath('data.total', 0);

    }
}
