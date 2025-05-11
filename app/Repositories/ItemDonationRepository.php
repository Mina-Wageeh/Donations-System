<?php


namespace App\Repositories;


use App\Dto\ItemDonationDto;
use App\Models\ItemDonation;
use App\Repositories\Interfaces\ItemDonationRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ItemDonationRepository implements ItemDonationRepositoryInterface
{
    public function getItemDonations()
    {
        return ItemDonation::get();
    }

    public function getMoneyDonationsWithGivers()
    {
        return DB::table('item_donations')
            ->join('givers', 'item_donations.giver_id', '=', 'givers.id')
            ->join('items', 'item_donations.item_id', '=', 'items.id')
            ->select
            (
                'givers.name as giver_name',
                'items.name as item_name',
                'item_donations.quantity',
            )
            ->get();
    }

    public function storeItemDonation(ItemDonationDto $dto)
    {
        ItemDonation::create($dto->toArray());
    }

    public function itemDonationsCountInSpecificDuration($duration)
    {
        return ItemDonation::where('creation_date', '>=', $duration)->count();
    }
}
