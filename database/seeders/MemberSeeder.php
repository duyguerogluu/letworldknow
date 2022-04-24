<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Dashboard\Entities\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'first_name'=>'member1',
                'last_name'=>'memberl1',
                'phone_1'=>'phone_1-1',
                'gender'=>'male',
                'user_id'=>1,
            ],
            [
                'first_name'=>'member2',
                'last_name'=>'memberl2',
                'phone_1'=>'phone_1-2',
                'gender'=>'female',
                'user_id'=>2,
            ]
        ];

        Member::insert($data);
    }
}
