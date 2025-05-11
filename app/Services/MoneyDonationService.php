<?php

namespace App\Services;

use App\Dto\MoneyDonationDto;
use App\Models\Giver;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;
use App\Repositories\MoneyDonationRepository;
use App\Services\Interfaces\MoneyDonationServiceInterface;

class MoneyDonationService implements MoneyDonationServiceInterface
{

    public $moneyDonationRepository;

    public function __construct(MoneyDonationRepositoryInterface $moneyDonationRepository)
    {
        $this->moneyDonationRepository = $moneyDonationRepository;
    }


    public function getMoneyDonations()
    {
        return $this->moneyDonationRepository->getMoneyDonations();
    }

    public function getMoneyDonationsWithGivers()
    {
        return $this->moneyDonationRepository->getMoneyDonationsWithGivers();
    }

    public function getTotalMoneyDonations()
    {
        return $this->moneyDonationRepository->getTotalMoneyDonations();
    }

    public function StoreMoneyDonation(MoneyDonationDto $dto)
    {
        $this->moneyDonationRepository->StoreMoneyDonation($dto);
    }

    public function moneyDonationsCountInSpecificDuration($duration)
    {
        return $this->moneyDonationRepository->moneyDonationsCountInSpecificDuration($duration);
    }


}
