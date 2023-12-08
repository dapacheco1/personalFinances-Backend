<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

    class TrxTypeRequest extends FormRequest{
        public function rules(){
            return [
                'id' => 'sometimes',
                'name' => 'sometimes | unique:trx_types,name,NULL,id,deleted_at,NULL'
            ];
        }
    }