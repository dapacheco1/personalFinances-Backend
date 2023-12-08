<?php
namespace App\Services;
use App\Models\TrxType;

class TrxTypeService{
    public function addNewTrxType($request){
        $trxType = new TrxType($request->all());
        $trxType->save();
        return response()->json(['message' => 'TrxType Succesfully created'],200);
    }

    public function updateTrxType($request){
        $trxType = TrxType::find($request->id);
        if($trxType){
            $trxType->name = $request->name;
            $trxType->update();
            return response()->json(['message' => 'TrxType Succesfully updated'],200);
        }else{
            return response()->json(['message' => 'Error updating trxType'],400);
        }
    }

    public function deleteTrxType($request){
        $trxType = TrxType::find($request->id);
        if($trxType){
            $trxType->delete();
            return response()->json(['message' => 'TrxType Succesfully deleted'],200);
        }else{
            return response()->json(['message' => 'Error deleting trxType'],400);
        }
    }
}