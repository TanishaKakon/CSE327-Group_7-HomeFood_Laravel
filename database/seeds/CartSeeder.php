<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\review;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker/Factory::create();

        foreach(range(1,5)as $index){
            cart::create([
                "UserId"=>rand(1,3),
                "FoodId"=>rand(1,5),
            ]);

        }
    }
}
