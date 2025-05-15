<?php

namespace Tests\Feature;

use App\Models\Giver;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ItemFeatureTest extends TestCase
{
    public function createUser()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }

    public function createItem()
    {

    }

    public function testShowIndexPage()
    {
        $this->createUser();

        $response = $this->get('items');

        $response->assertStatus(200);
    }

    public function testShowCreateGiverPage()
    {
        $this->createUser();
        $response = $this->get('givers/create');
        $response->assertStatus(200);
    }

    public function testStoreItem()
    {
        $this->createUser();

        $data =
        [
            'name' => 'ItemTest' . time(),
            'quantity' => 1010,
        ];

        $response = $this->post('/items/store', $data);

        $response->assertRedirect(route('item.index'));

        $this->assertDatabaseHas('items' , $data);
    }

}
