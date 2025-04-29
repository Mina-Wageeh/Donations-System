<?php

namespace App\Providers;

use App\Repositories\InstitutionRepository;
use App\Repositories\GiverRepository;
use App\Repositories\Interfaces\InstitutionRepositoryInterface;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\ItemDonationRepositoryInterface;
use App\Repositories\Interfaces\ItemRepositoryInterface;
use App\Repositories\Interfaces\MoneyDistributionRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;
use App\Repositories\ItemDonationRepository;
use App\Repositories\ItemRepository;
use App\Repositories\MoneyDistributionRepository;
use App\Repositories\MoneyDonationRepository;
use App\Services\InstitutionService;
use App\Services\GiverService;
use App\Services\Interfaces\ChurchServiceInterface;
use App\Services\Interfaces\GiverServiceInterface;
use App\Services\Interfaces\InstitutionServiceInterface;
use App\Services\Interfaces\ItemDonationServiceInterface;
use App\Services\Interfaces\ItemServiceInterface;
use App\Services\Interfaces\MoneyDistributionServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;
use App\Services\ItemDonationService;
use App\Services\ItemService;
use App\Services\MoneyDistributionService;
use App\Services\MoneyDonationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(InstitutionServiceInterface::class, InstitutionService::class);
        $this->app->bind(GiverServiceInterface::class, GiverService::class);
        $this->app->bind(ItemDonationServiceInterface::class, ItemDonationService::class);
        $this->app->bind(ItemServiceInterface::class, ItemService::class);
        $this->app->bind(MoneyDonationServiceInterface::class, MoneyDonationService::class);
        $this->app->bind(MoneyDistributionServiceInterface::class, MoneyDistributionService::class);

        $this->app->bind(InstitutionRepositoryInterface::class, InstitutionRepository::class);
        $this->app->bind(GiverRepositoryInterface::class, GiverRepository::class);
        $this->app->bind(ItemDonationRepositoryInterface::class, ItemDonationRepository::class);
        $this->app->bind(ItemRepositoryInterface::class, ItemRepository::class);
        $this->app->bind(MoneyDonationRepositoryInterface::class, MoneyDonationRepository::class);
        $this->app->bind(MoneyDistributionRepositoryInterface::class, MoneyDistributionRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
