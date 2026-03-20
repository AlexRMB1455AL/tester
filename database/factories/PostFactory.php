<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'provider_id' => $this->faker->numberBetween(1, 100),
            'service_id' => $this->faker->numberBetween(1, 100),
            'total_time' => $this->faker->numberBetween(1, 480),
            'earnings' => $this->faker->numberBetween(0, 20000),
            'status' => $this->faker->randomElement(
                [
                    'created',
                    'payed',
                    'started',
                    'finished',
                    'confirmed',
                    'closed',
                    'canceled',
                ]
            )

        ];
    }
}
