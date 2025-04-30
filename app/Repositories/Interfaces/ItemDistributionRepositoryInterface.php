<?php


namespace App\Repositories\Interfaces;

use App\Dto\ItemDistributionDto;
use App\Dto\MoneyDistributionDto;

interface ItemDistributionRepositoryInterface
{
    public function getItemDistributions();
    public function storeItemDistribution(ItemDistributionDto $dto);
}
