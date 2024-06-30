<?php

namespace Database\Factories;

use App\Models\BusinessCardTag;
use App\Models\BusinessCard;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessCardTagFactory extends Factory
{
    protected $model = BusinessCardTag::class;

    public function definition()
    {
        return [
            'business_card_id' => BusinessCard::factory(),
            'tag_id' => Tag::factory(),
        ];
    }
}
