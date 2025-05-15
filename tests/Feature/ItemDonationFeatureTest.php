<?php

use App\Models\User;
use Tests\TestCase;

class ItemDonationFeatureTest extends TestCase
{
    public function createUser()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }

    public function test_show_item_donation_index_page()
    {
        $this->createUser();

        $response = $this->get(route('donation.item.index'));

        $response->assertStatus(200);
    }

    public function test_show_item_donation_create_page()
    {
        $this->createUser();

        $response = $this->get(route('donation.item.create'));

        $response->assertStatus(200);
    }

    public function test_store_item_donation()
    {
        $this->createUser();

        $data = ['giver_id' => 1 , 'item_id' => 1 , 'quantity' => 1234];

        $response = $this->post(route('donation.item.store') , $data);

        $response->assertRedirect(route('donation.item.index'));

        $this->assertDatabaseHas('item_donations' , $data);
    }
}
