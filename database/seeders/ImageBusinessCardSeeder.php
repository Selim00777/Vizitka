<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ImageBusinessCard;

class ImageBusinessCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageBusinessCard::factory(10)->create();
    }
}
