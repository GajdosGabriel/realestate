<?php

namespace Tests\Feature\MemberArea;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class MemberAreaLoadTest extends TestCase {
    public function testIndex() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.home'));

        $response->assertStatus(200);
    }

    public function testWhyInvest() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.sirava.why_invest'));

        $response->assertStatus(200);
    }

    public function testMasterPlan() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.sirava.master_plan'));

        $response->assertStatus(200);
    }

    public function testBusinessPlan() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.sirava.business_plan'));

        $response->assertStatus(200);
    }

    public function testHowToInvest() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.sirava.how_to_invest'));

        $response->assertStatus(200);
    }

    public function testInvest() {
        $objUser = User::findOrFail(1);
        $objUser->step = 1;

        $response = $this->actingAs($objUser)->get(route('member.invest'));

        $response->assertStatus(200);
    }

    public function testNews() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.sirava.news'));

        $response->assertStatus(200);
    }

    public function testContact() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.contact'));

        $response->assertStatus(200);
    }

    public function testInvestments() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.investments'));

        $response->assertStatus(200);
    }

    public function testAccount() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.account'));

        $response->assertStatus(200);
    }

    public function testPartner() {
        $objUser = User::findOrFail(1);

        $response = $this->actingAs($objUser)->get(route('member.partner.home'));

        $response->assertStatus(200);
    }
}
