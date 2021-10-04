<?php

namespace Database\Factories;

use App\Models\Commercial;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommercialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commercial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            "lat" => $this->faker->latitude,
            "lng" => $this->faker->longitude,
            'image' => $this->faker->imageUrl(1280, 720),
            'description' => $this->faker->text(800),
            'active' => rand(0,1),

            'client_id' => rand(1,10)
        ];
    }
}
