<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrxTypeRequest;
use App\Services\TrxTypeService;
use Illuminate\Http\Request;

class TrxTypeController extends Controller
{
    public function __construct(TrxTypeService $trxTypeService)
    {
        $this->trxTypeService = $trxTypeService;    
    }

    public function createTrxType(TrxTypeRequest $request){
        return $this->trxTypeService->addNewTrxType($request);
    }

    public function updateTrxType(TrxTypeRequest $request){
        return $this->trxTypeService->updateTrxType($request);
    }
    public function deleteTrxType(TrxTypeRequest $request){
        return $this->trxTypeService->deleteTrxType($request);
    }
}
