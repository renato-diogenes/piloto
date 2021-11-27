<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Machine;

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
            'image' => $this->faker->image(
                storage_path('app/images'), 640, 480, null, false
            ),
            'seal' => Str::random(10),
            'machine_id' => Machine::factory()
        ];
    }
}
