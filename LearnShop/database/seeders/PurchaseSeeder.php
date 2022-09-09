<?php

namespace Database\Seeders;

use App\Models\Purchase;
use Database\Factories\PurchaseFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purchase::factory(8)->create();
    }
}
