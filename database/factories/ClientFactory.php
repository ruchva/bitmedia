<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'email' => $this->faker->email,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(1280, 720),
            'active' => rand(0,1),

            'category_id' => rand(1,3)
        ];
    }
}
