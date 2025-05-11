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
use App\Services\Interfaces\MoneyDistributionServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;
use App\Services\MoneyDonationService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $institutionService;
    public $giverService;
    public $moneyDonationsService;
    public $moneyDistributionsService;

    public function __construct
    (
        InstitutionServiceInterface $institutionService,
        GiverServiceInterface $giverService,
        MoneyDonationServiceInterface $moneyDonationsService,
        MoneyDistributionServiceInterface $moneyDistributionService,
    )
    {
        $this->institutionService = $institutionService;
        $this->giverService = $giverService;
        $this->moneyDonationsService = $moneyDonationsService;
        $this->moneyDistributionsService = $moneyDistributionService;
    }

    public function dashboard()
    {
        $institutionsCount = $this->institutionService->getInstitutionsCount();
        $giversCount = $this->giverService->getGiversCount();
        $totalMoneyDonations = $this->moneyDonationsService->getTotalMoneyDonations();
        $totalMoneyDistributions = $this->moneyDistributionsService->getTotalMoneyDistributions();
        return view('dashboard.index' , compact(['institutionsCount' , 'giversCount' , 'totalMoneyDonations' , 'totalMoneyDistributions']));
    }

    public function redirectToDashboard()
    {
       return redirect()->route('dashboard');
    }
}
