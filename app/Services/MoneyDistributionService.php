<?php

namespace App\Services;

use App\Dto\MoneyDistributionDto;
use App\Dto\MoneyDonationDto;
use App\Models\Giver;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\MoneyDistributionRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;
use App\Repositories\MoneyDonationRepository;
use App\Services\Interfaces\MoneyDistributionServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;

class MoneyDistributionService implements MoneyDistributionServiceInterface
{

    public $moneyDistributionRepository;


    public function __construct(MoneyDistributionRepositoryInterface $moneyDistributionRepository)
    {
        $this->moneyDistributionRepository = $moneyDistributionRepository;
    }

    public function StoreMoneyDistribution(MoneyDistributionDto $dto)
    {
        $this->moneyDistributionRepository->StoreMoneyDistribution($dto);
    }


}
