<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class TestHtpp extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testResponse(): void
    {
        $response = Http::get("https://enhi414s7m1q4.x.pipedream.net/");

        self::assertTrue($response->ok());
        $json = $response->json();
        self::assertTrue($json["success"]);
    }

    public function testResponseWithQueryParameter(): void
    {
        $response = Http::withQueryParameters([
            "page" => 1,
            "limit" => 10
        ])->get("https://enhi414s7m1q4.x.pipedream.net/");

        self::assertNotNull($response->ok());
    }
}
