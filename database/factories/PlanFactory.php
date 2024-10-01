<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->randomElement(['Marriage and Family Therapy', 'Couples Therapy', 'Child and Adolescent Therapy', 'Individual Therapy (Psychotherapy)', 'Group Therapy', 'Substance Abuse Therapy', 'Trauma Therapy', 'Cognitive Behavioral Therapy (CBT)','Dialectical Behavior Therapy (DBT)', 'Family Systems Therapy', 'Play Therapy']),
            'description' => fake()->sentence(),
            'num_sessions' => fake()->randomElement([10, 7, 12, 16]),
            'price' => fake()->randomElement([10000, 12000, 8000]),
        ];
    }
}
