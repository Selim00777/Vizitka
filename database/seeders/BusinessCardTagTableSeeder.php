<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BusinessCardTag;

class   BusinessCardTagTableSeeder extends Seeder
{
    public function run()
    {
        BusinessCardTag::factory(10)->create();
    }
}
