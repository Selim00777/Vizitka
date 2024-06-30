<?php

namespace Database\Factories;

use App\Models\ImageBusinessCard;
use App\Models\BusinessCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageBusinessCardFactory extends Factory
{
    protected $model = ImageBusinessCard::class;

    public function definition()
    {
        return [
            'business_card_id' => BusinessCard::factory(),
            'url' => $this->faker->imageUrl(),
        ];
    }
}
