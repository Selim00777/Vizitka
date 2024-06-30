<?php

namespace Database\Factories;

use App\Models\SocialMedia;
use App\Models\BusinessCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialMediaFactory extends Factory
{
    protected $model = SocialMedia::class;

    public function definition()
    {
        return [
            'business_card_id' => BusinessCard::factory(),
            'platform' => $this->faker->word(),
            'url' => $this->faker->url(),
        ];
    }
}
