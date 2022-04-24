<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name'=>'userOne One',
                'email'=>'userone@gmail.com',
                'password' => bcrypt('passwordOne'),
            ],
            [
                'name'=>'userTwo Two',
                'email'=>'usertwo@gmail.com',
                'password' => bcrypt('passwordTwo'),
            ]

        ];

        User::insert($data);
    }
}
