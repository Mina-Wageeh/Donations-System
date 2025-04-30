<?php

namespace App\Services;

use App\Dto\ItemDistributionDto;
use App\Dto\MoneyDistributionDto;
use App\Dto\MoneyDonationDto;
use App\Models\Giver;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\ItemDistributionRepositoryInterface;
use App\Repositories\Interfaces\MoneyDistributionRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;
use App\Repositories\MoneyDonationRepository;
use App\Services\Interfaces\ItemDistributionServiceInterface;
use App\Services\Interfaces\MoneyDistributionServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;

class ItemDistributionService implements ItemDistributionServiceInterface
{

    public $itemDistributionRepository;


    public function __construct(ItemDistributionRepositoryInterface $itemDistributionRepository)
    {
        $this->itemDistributionRepository = $itemDistributionRepository;
    }

    public function getItemDistributions()
    {
        return $this->itemDistributionRepository->getItemDistributions();
    }

    public function storeItemDistribution(ItemDistributionDto $dto)
    {
        $this->itemDistributionRepository->storeItemDistribution($dto);
    }

}
