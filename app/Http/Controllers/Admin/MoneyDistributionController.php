<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MoneyDistributionRequest;
use App\Services\Interfaces\InstitutionServiceInterface;
use App\Services\Interfaces\MoneyDistributionServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;
use App\Services\MoneyDistributionService;
use Illuminate\Http\Request;

class MoneyDistributionController extends Controller
{

    public $institutionService;
    public $moneyDistributionService;
    public $moneyDonationService;


    public function __construct
    (
        InstitutionServiceInterface $institutionService,
        MoneyDistributionServiceInterface $moneyDistributionService,
        MoneyDonationServiceInterface $moneyDonationService,
    )
    {
        $this->institutionService = $institutionService;
        $this->moneyDistributionService = $moneyDistributionService;
        $this->moneyDonationService = $moneyDonationService;
    }

    public function index()
    {
        $moneyDistributions = $this->moneyDistributionService->getMoneyDistributionsWithInstitutions();
        return view('dashboard.money-distribution.index' , compact('moneyDistributions'));
    }

    public function create()
    {
        $institutions = $this->institutionService->getInstitutions();
        return view('dashboard.money-distribution.create' , compact('institutions'));
    }

    public function store(MoneyDistributionRequest $request)
    {
        $dto = $request->getDto();

        $totalDistributed = $request->amount;
        $totalDonations = $this->moneyDonationService->getTotalMoneyDonations();

        if ($totalDistributed < $totalDonations)
        {
            $this->moneyDistributionService->StoreMoneyDistribution($dto);
        }

        return redirect()->route('money.distribution.index');
    }
}
