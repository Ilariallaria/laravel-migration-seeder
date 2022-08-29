<?php

use Illuminate\Database\Seeder;
use App\Offer;
use Faker\Generator as Faker;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        $host_structure = [
            'Hotel',
            'Hostel',
            'B&B',
            'Apartment',
            'Studio',
            'Loft'
        ];

        for($i = 1; $i <=10; $i++){
            $new_offer = new Offer();

            $new_offer -> destination = $faker->state() ;
            $new_offer -> city = $faker->city();
            $new_offer ->state = $faker->country();
            $new_offer -> nights = rand(0, 10);
            $new_offer -> host_structure = $host_structure[rand(0, 5)] ;
            $new_offer -> price = $faker->randomFloat(2, 500, 80000);
            $new_offer -> airport_transfer = $faker->boolean();

            $new_offer -> save();
        }
    }
}
