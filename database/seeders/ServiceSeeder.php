<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service1 = new Service();
        $service1->name = "Steel Detailing";
        $service1->save();

        $service2 = new Service();
        $service2->name = "Joint Calculations";
        $service2->save();

        $service3 = new Service();
        $service3->name = "Static Calculations";
        $service3->save();
    }
}
