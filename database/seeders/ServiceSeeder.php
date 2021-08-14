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
        Service::insert([
            [
                'name' => 'Steel Detailing'
            ],
            [
                'name' => 'Joint Calculations'
            ],
            [
                'name' => 'Static Calculations'
            ]
        ]);
    }
}
