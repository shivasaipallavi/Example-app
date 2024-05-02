<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\manager;
class managerTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $e = new manager();
        $e->name = 'MAX';
        $e->save();

        $e = new manager();
        $e->name = 'mienne';
        $e->save();
    }
}
