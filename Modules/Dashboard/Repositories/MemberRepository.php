<?php

namespace Modules\Dashboard\Repositories;

use App\Http\GeneralHelpers;
use Modules\Dashboard\Entities\Member;

class MemberRepository implements Interfaces\MemberRepositoryInterface
{

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function getAll($id)
    {
        // TODO: Implement getAll() method.
    }

    public function create($data)
    {
        $model = Member::create($data);
        if($model){
            return response()->json(['status'=>'success','message'=> 'Member save is success !']);
        }else{
            return response()->json(['status'=>'failed','message'=> 'Member save is failed !']);
        }

    }

    public function update($id,$data)
    {
        //@todo aynı telefon numaraları vs seçilen alanalrın kaydına ve updateine izin verme
        $member = Member::find($id);
        return GeneralHelpers::generalUpdate('Member',$member,$data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
