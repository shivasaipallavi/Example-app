<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\foodcoupon;
class foodcouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $k = new foodcoupon;
        $k->name = "shiva";
        $k->save();
        $k->employees()->attach(1);
        $k->employees()->attach(2);
    }
}
