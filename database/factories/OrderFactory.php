<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_number' => 'ORD-' . $this->faker->unique()->numberBetween(1000, 9999),
            'customer_name' => $this->faker->name(),
            'total_amount' => $this->faker->randomFloat(2, 50, 5000),
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'cancelled']),
            'order_date' => $this->faker->dateTimeBetween('-30 days', 'now'),
        ];
    }
}
