<?php

use App\Models\User;
use Tests\TestCase;

class ItemDistributionFeatureTest extends TestCase
{
    public function createUser()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }

    public function test_show_item_distribution_index_page()
    {
        $this->createUser();

        $response = $this->get(route('item.distribution.index'));

        $response->assertStatus(200);
    }

    public function test_show_item_distribution_create_page()
    {
        $this->createUser();

        $response = $this->get(route('item.distribution.create'));

        $response->assertStatus(200);
    }

    public function test_store_item_distribution()
    {
        $this->createUser();

        $data = ['institution_id' => 1 , 'item_id' => 1 ,  'quantity' => 1234];

        $response = $this->post(route('item.distribution.store') , $data);

        $response->assertRedirect(route('item.distribution.index'));

        $this->assertDatabaseHas('item_distributions' , $data);
    }
}
