<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\vehicle;

use App\Models\employee;

class vehicleTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $e = new vehicle;
        $e->name = 'duke';
        $e->phone_number = '04567812395';
        $e->employee_id = 1;
        $e->save();

        $e = new vehicle;
        $e->name = 'pulsar';
        $e->phone_number = '7894561230';
        $e->employee_id = 2;
        $e->save();
    }
}
