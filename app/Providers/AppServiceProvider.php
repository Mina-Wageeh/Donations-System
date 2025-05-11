<?php

namespace App\Providers;

use App\Repositories\InstitutionRepository;
use App\Repositories\GiverRepository;
use App\Repositories\Interfaces\InstitutionRepositoryInterface;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\ItemDistributionRepositoryInterface;
use App\Repositories\Interfaces\ItemDonationRepositoryInterface;
use App\Repositories\Interfaces\ItemRepositoryInterface;
use App\Repositories\Interfaces\MoneyDistributionRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;
use App\Repositories\ItemDistributionRepository;
use App\Repositories\ItemDonationRepository;
use App\Repositories\ItemRepository;
use App\Repositories\MoneyDistributionRepository;
use App\Repositories\MoneyDonationRepository;
use App\Services\CheckDonationsService;
use App\Services\InstitutionService;
use App\Services\GiverService;
use App\Services\Interfaces\CheckDonationsServiceInterface;
use App\Services\Interfaces\ChurchServiceInterface;
use App\Services\Interfaces\GiverServiceInterface;
use App\Services\Interfaces\InstitutionServiceInterface;
use App\Services\Interfaces\ItemDistributionServiceInterface;
use App\Services\Interfaces\ItemDonationServiceInterface;
use App\Services\Interfaces\ItemServiceInterface;
use App\Services\Interfaces\MoneyDistributionServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;
use App\Services\Interfaces\NotificationServiceInterface;
use App\Services\ItemDistributionService;
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
        $this->app->bind(ItemDistributionServiceInterface::class, ItemDistributionService::class);
        $this->app->bind(CheckDonationsServiceInterface::class, CheckDonationsService::class);
        $this->app->bind(NotificationServiceInterface::class, NotificationService::class);

        $this->app->bind(InstitutionRepositoryInterface::class, InstitutionRepository::class);
        $this->app->bind(GiverRepositoryInterface::class, GiverRepository::class);
        $this->app->bind(ItemDonationRepositoryInterface::class, ItemDonationRepository::class);
        $this->app->bind(ItemRepositoryInterface::class, ItemRepository::class);
        $this->app->bind(MoneyDonationRepositoryInterface::class, MoneyDonationRepository::class);
        $this->app->bind(MoneyDistributionRepositoryInterface::class, MoneyDistributionRepository::class);
        $this->app->bind(ItemDistributionRepositoryInterface::class, ItemDistributionRepository::class);
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
