<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\employee;
class employeeTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $a = new employee;
        $a->name ="sai";
        $a->height =190;
        $a->manager_id = 1;
        $a->save();

        $a = new employee;
        $a->name ="Ram";
        $a->height =190;
        $a->manager_id = 2;
        $a->save();

        employee::factory()->count(50)->create();
        
    }
}
