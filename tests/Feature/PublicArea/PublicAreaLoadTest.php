<?php

namespace Tests\Feature\PublicArea;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PublicAreaLoadTest extends TestCase {
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex() {
        $response = $this->get(route('public.home'));

        $response->assertStatus(200);
    }

    public function testLogin() {
        $response = $this->get(route('public.login'));

        $response->assertStatus(200);
    }

    public function testSignup() {
        $response = $this->get(route('public.signUp'));

        $response->assertStatus(200);
    }

    public function testCertification() {
        $response = $this->get(route('public.certification.index'));

        $response->assertStatus(200);
    }

    public function testHNWI() {
        $response = $this->get(route('public.certification.hnwi'));

        $response->assertStatus(200);
    }

    public function testSI() {
        $response = $this->get(route('public.certification.si'));

        $response->assertStatus(200);
    }

    public function testRI() {
        $response = $this->get(route('public.certification.ri'));

        $response->assertStatus(200);
    }
}
