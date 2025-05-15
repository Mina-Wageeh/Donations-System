<?php

namespace Tests\Unit\Services;

use App\Dto\GiverDto;
use App\Services\GiverService;
use PHPUnit\Framework\TestCase;
use Stubs\GiverRepositoryStub;

class GiverServiceTest extends TestCase
{
    public function test_get_all_givers()
    {
        $service = new GiverService(new GiverRepositoryStub());

        $givers = $service->getAllGivers();

        $this->assertCount(2, $givers);
        $this->assertEquals('Ahmed', $givers[0]->name);
    }

    public function test_store_giver()
    {
        $dto = new GiverDto('Test Name', 'Test Address', '01000000000');
        $service = new GiverService(new GiverRepositoryStub());

        $giver = $service->storeGiver($dto);

        $this->assertEquals('Test Name', $giver->name);
    }
}
