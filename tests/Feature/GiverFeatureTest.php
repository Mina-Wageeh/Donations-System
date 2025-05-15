<?php

namespace Tests\Feature;

use App\Models\Giver;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class GiverFeatureTest extends TestCase
{
    public function createUser()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }


    public function testIndex()
    {
        $this->createUser();

        $response = $this->get('givers');

        $response->assertStatus(200);
    }

    public function testShowCreateGiverPage()
    {
        $this->createUser();
        $response = $this->get('givers/create');
        $response->assertStatus(200);
    }

    public function testStoreGiverWithoutAuth()
    {
        $response = $this->post('/givers/store');

        $response->assertRedirect('/login');
    }

    public function testStoreGiverWithAuth()
    {
        $this->createUser();

        $data =
        [
            'name' => 'Test Giver' . time(),
            'address' => 'Giver Test Address',
            'phone' => '01258794587',
        ];

        $response = $this->post('/givers/store', $data);

        $response->assertRedirect(route('giver.index'));
    }

    public function testShowGiverEditPage()
    {
        $this->createUser();

        $giver = Giver::factory()->create();

        $response = $this->get("givers/edit/{$giver->id}");

        $response->assertStatus(200);
    }

    public function testInstitutionDelete()
    {
        $this->createUser();

        $giver = Giver::factory()->create();

        $response = $this->post('givers/delete', ['id' => $giver->id]);

        $response->assertStatus(200);
    }
}
