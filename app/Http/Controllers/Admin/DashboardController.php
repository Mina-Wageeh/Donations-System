<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\Giver;
use App\Models\MoneyDonation;
use App\Services\InstitutionService;
use App\Services\GiverService;
use App\Services\Interfaces\GiverServiceInterface;
use App\Services\Interfaces\InstitutionServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;
use App\Services\MoneyDonationService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $institutionService;
    public $giverService;
    public $moneyDonationsService;

    public function __construct(InstitutionServiceInterface $institutionService , GiverServiceInterface $giverService , MoneyDonationServiceInterface $moneyDonationsService)
    {
        $this->institutionService = $institutionService;
        $this->giverService = $giverService;
        $this->moneyDonationsService = $moneyDonationsService;
    }

    public function dashboard()
    {
        $institutionsCount = $this->institutionService->getInstitutionsCount();
        $giversCount = $this->giverService->getGiversCount();
        $totalMoneyDonations = $this->moneyDonationsService->getTotalMoneyDonations();
        return view('dashboard.index' , compact(['institutionsCount' , 'giversCount' , 'totalMoneyDonations']));
    }
}
