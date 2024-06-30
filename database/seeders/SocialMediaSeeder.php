<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialMedia;

class SocialMediaSeeder extends Seeder
{
    public function run()
    {
        SocialMedia::factory(10)->create();
    }
}
