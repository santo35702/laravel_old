<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::of($name)->slug('-');
        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->text(500),
            'image' => 'brandlogo' . $this->faker->numberBetween(1,6) . '.png',
            'user_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
