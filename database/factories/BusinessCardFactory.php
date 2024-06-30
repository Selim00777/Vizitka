<?php

namespace Database\Factories;

use App\Models\BusinessCard;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessCardFactory extends Factory
{
    protected $model = BusinessCard::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->company,
            'description' => $this->faker->paragraph,
        ];
    }
}
