<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BusinessCard;

class BusinessCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessCard::factory(10)->create();
    }
}
