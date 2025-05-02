<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MoneyDonationRequest;
use App\Services\GiverService;
use App\Services\Interfaces\GiverServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;
use App\Services\MoneyDonationService;
use Illuminate\Http\Request;

class MoneyDonationController extends Controller
{

    public $moneyDonationService;
    public $giverService;

    public function __construct(MoneyDonationServiceInterface $moneyDonationService, GiverServiceInterface $giverService)
    {
        $this->moneyDonationService = $moneyDonationService;
        $this->giverService = $giverService;
    }


    public function index()
    {
//        $moneyDonations = $this->moneyDonationService->getMoneyDonations();
        $moneyDonations = $this->moneyDonationService->getMoneyDonationsWithGivers();
        $moneyDonationsTotal = $this->moneyDonationService->getTotalMoneyDonations();

        return view('dashboard.donation-money.index' , compact('moneyDonations' , 'moneyDonationsTotal'));
    }

    public function create()
    {
        $givers = $this->giverService->getAllGivers();
        return view('dashboard.donation-money.create' , compact('givers'));
    }

    public function store(MoneyDonationRequest $request)
    {

        $dto = $request->getDto();

        $this->moneyDonationService->StoreMoneyDonation($dto);

        return redirect()->route('donation.money.index');

    }
}
