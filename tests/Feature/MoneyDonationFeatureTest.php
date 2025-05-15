<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MoneyDonationFeatureTest extends TestCase
{

    public function createUser()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }

    public function test_show_money_donation_index_page()
    {
        $this->createUser();

        $response = $this->get(route('donation.money.index'));

        $response->assertStatus(200);
    }

    public function test_show_money_donation_create_page()
    {
        $this->createUser();

        $response = $this->get(route('donation.money.create'));

        $response->assertStatus(200);
    }

    public function test_store_money_donation()
    {
        $this->createUser();

        $data = ['giver_id' => 1 , 'amount' => 1234];

        $response = $this->post(route('donation.money.store') , $data);

        $response->assertRedirect(route('donation.money.index'));

        $this->assertDatabaseHas('money_donations' , $data);
    }
}
