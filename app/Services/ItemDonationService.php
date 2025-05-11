<?php


namespace App\Services;


use App\Dto\ItemDonationDto;
use App\Models\ItemDonation;
use App\Repositories\Interfaces\ItemDonationRepositoryInterface;
use App\Repositories\ItemDonationRepository;
use App\Services\Interfaces\ItemDonationServiceInterface;

class ItemDonationService implements ItemDonationServiceInterface
{
    public $itemDonationRepository;

    public function __construct(ItemDonationRepositoryInterface $itemDonationRepository)
    {
        $this->itemDonationRepository = $itemDonationRepository;
    }


    public function getItemDonations()
    {
        return $this->itemDonationRepository->getItemDonations();
    }

    public function getMoneyDonationsWithGivers()
    {
        return $this->itemDonationRepository->getMoneyDonationsWithGivers();
    }

    public function storeItemDonation(ItemDonationDto $dto)
    {
        $this->itemDonationRepository->storeItemDonation($dto);
    }

    public function itemDonationsCountInSpecificDuration($duration)
    {
        return $this->itemDonationRepository->itemDonationsCountInSpecificDuration($duration);
    }

}
