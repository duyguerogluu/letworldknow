<?php

namespace App\Http;

use Modules\Dashboard\Entities\Member;

class GeneralHelpers
{
    public static function generalUpdate($modelName,$model,$data){

        try {
            $model->fill($data);
            $model->save();
            return response()->json(['status'=>'success','message'=> $modelName.' update is success !']);

        }catch (\Exception $e){
            return response()->json(['status'=>'failed','message'=> $modelName.' update is failed !']);
        }
    }
}
