<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PilotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => '/public/images/' . Str::random(10),
            'seal' => Str::random(10),
            'machine' => rand(0, 99999)
        ];
    }
}
