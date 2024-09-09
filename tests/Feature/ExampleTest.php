<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testGet() {
        self::assertTrue(Http::get("https://enhi414s7m1q4.x.pipedream.net/")->ok());
    }   

    public function testPost() {
        self::assertTrue(Http::post("https://enhi414s7m1q4.x.pipedream.net/")->ok());
    } 

    public function testDelete() {
        self::assertTrue(Http::delete("https://enhi414s7m1q4.x.pipedream.net/")->ok());
    } 
}
