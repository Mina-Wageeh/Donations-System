<?php

namespace Tests\Feature;

use App\Dto\InstitutionDto;
use App\Models\Institution;
use App\Models\User;
use App\Services\InstitutionService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InstitutionFeatureTest extends TestCase
{
    public function createUser()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }


    public function testIndex()
    {
        $this->createUser();

        $response = $this->get('institutions');

        $response->assertStatus(200);
    }

    public function testShowInstitutionPage()
    {
        $this->createUser();
        $response = $this->get('institutions/create');
        $response->assertStatus(200);
    }

    public function testStoreInstitution()
    {
        $this->createUser();

        $data = ['name' => 'InstitutionName' , 'location' => 'Cairo'];

        $response = $this->post('institutions/store' , $data);

        $response->assertRedirect(route('institution.index'));
    }

    public function testShowInstitutionEditPage()
    {
        $this->createUser();

        $institution = Institution::factory()->create();

        $response = $this->get("institutions/edit/{$institution->id}");

        $response->assertStatus(200);
    }

    public function testInstitutionUpdate()
    {
        $this->createUser();

        $institution = Institution::factory()->create();

        $data = ['name' => 'Updated Name', 'location' => 'Updated Location'];

        $response = $this->post("institutions/update/{$institution->id}", $data);

        $response->assertRedirect(route('institution.index'));
    }

    public function testInstitutionDelete()
    {
        $this->createUser();

        $institution = Institution::factory()->create();

        $response = $this->post('institutions/delete', ['id' => $institution->id]);

        $response->assertStatus(200);
    }
}
