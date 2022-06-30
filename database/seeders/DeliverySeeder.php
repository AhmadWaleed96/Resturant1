<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \faker\factory::create();

        // for ($i = 1; $i < 10; $i++)
        // Delivery::create([
        //     'image' => '/public/pages/assets/img/menu/tuscan-grilled.jpg',
        // ]);
    }
}
