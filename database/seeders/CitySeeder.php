<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = Country::all();
        foreach ($countries AS $country){
            $model = new City();
            for($i = 0 ; $i < 4 ; $i++){
                $model->country_id = $country->id;
                $model->name = $country->country_code.'-city'.$i;
                $model->save();
            }
        }
    }
}
