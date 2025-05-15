<?php

use App\Models\User;
use Tests\TestCase;

class MoneyDistributionFeatureTest extends TestCase
{
    public function createUser()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }

    public function test_show_money_distribution_index_page()
    {
        $this->createUser();

        $response = $this->get(route('money.distribution.index'));

        $response->assertStatus(200);
    }

    public function test_show_money_distribution_create_page()
    {
        $this->createUser();

        $response = $this->get(route('money.distribution.create'));

        $response->assertStatus(200);
    }

    public function test_store_money_distribution()
    {
        $this->createUser();

        $data = ['institution_id' => 1 , 'amount' => 1234];

        $response = $this->post(route('money.distribution.store') , $data);

        $response->assertRedirect(route('money.distribution.index'));

        $this->assertDatabaseHas('money_distributions' , $data);
    }
}
