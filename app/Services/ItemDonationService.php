<?php


namespace App\Services;


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

    public function storeItemDonation($data)
    {
        $this->itemDonationRepository->storeItemDonation($data);
    }
}
