<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\post;
class posttableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        post::factory()->count(10)->create();
    }
}
