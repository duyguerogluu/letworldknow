<?php

namespace Modules\Dashboard\Repositories;

use App\Http\GeneralHelpers;
use Modules\Dashboard\Entities\Member;
use Modules\Dashboard\Entities\Profile;

class ProfileRepository implements Interfaces\ProfileRepositoryInterface
{
    public function __construct()
    {

    }
    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function getAll($id = null)
    {

    }

    public function create($request)
    {
        $model = Profile::create($request);
        if($model){
            return response()->json(['status'=>'success','message'=> 'Profile save is success !']);
        }else{
            return response()->json(['status'=>'failed','message'=> 'Profile save is failed !']);
        }

    }

    public function update($id, $data)
    {
        $profile = Profile::find($id);
        return GeneralHelpers::generalUpdate('Profile',$profile,$data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
