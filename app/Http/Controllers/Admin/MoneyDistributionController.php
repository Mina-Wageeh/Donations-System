<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MoneyDistributionRequest;
use App\Services\Interfaces\InstitutionServiceInterface;
use App\Services\Interfaces\MoneyDistributionServiceInterface;
use App\Services\MoneyDistributionService;
use Illuminate\Http\Request;

class MoneyDistributionController extends Controller
{

    public $institutionService;
    public $moneyDistributionService;


    public function __construct(InstitutionServiceInterface $institutionService , MoneyDistributionServiceInterface $moneyDistributionService)
    {
        $this->institutionService = $institutionService;
        $this->moneyDistributionService = $moneyDistributionService;
    }

    public function index()
    {
        return view('dashboard.money-distribution.index');
    }

    public function create()
    {
        $institutions = $this->institutionService->getInstitutions();
        return view('dashboard.money-distribution.create' , compact('institutions'));
    }

    public function store(MoneyDistributionRequest $request)
    {
        $dto = $request->getDto();

        $this->moneyDistributionService->StoreMoneyDistribution($dto);

        return redirect()->route('money.distribution.index');
    }
}
