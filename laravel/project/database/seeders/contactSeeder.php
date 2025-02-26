<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\contact;
use Faker\Factory as faker;


class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        /* // seeder
        $data = new contact;
        $data->name = "Nirav";
        $data->email = "nirav@gmail.com";
        $data->mobile = "1234567891";
        $data->comment = "Hello dummy data";
        $data->save();
        */

        // faker

        $faker= Faker::create();
        for ($i = 1; $i <= 50; $i++) {
            $data = new contact;
            $data->name = $faker->name; // $faker->sentence(3)
            $data->email = $faker->email;
            $data->mobile = $faker->numerify('##########');
            $data->comment = $faker->realText;;
            $data->save();
        }
    }
}
