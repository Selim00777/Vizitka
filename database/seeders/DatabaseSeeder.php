<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BusinessCardSeeder::class,
            ImageBusinessCardSeeder::class,
            SocialMediaSeeder::class,
            BusinessCardCategoriesTableSeeder::class,
            TagsTableSeeder::class,
            BusinessCardTagTableSeeder::class,
        ]);
    }
}
