<?php

namespace Database\Seeders;

use App\Models\vehicle;

use App\Models\employee;

use App\Models\manager;

use App\Models\foodcoupon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(managerTableseeder::class);
        $this->call(employeeTableseeder::class);
        $this->call(foodcouponTableSeeder::class);
        $this->call(vehicleTableseeder::class);
        $this->call(UserTableSeeder::class);
    }
}
