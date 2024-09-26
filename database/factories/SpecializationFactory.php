<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialization>
 */
class SpecializationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'doctor_id' => Doctor::factory(),
            'name' => fake()->unique()->randomElement(['Marriage and Family Therapy', 'Couples Therapy', 'Child and Adolescent Therapy', 'Individual Therapy (Psychotherapy)', 'Group Therapy', 'Substance Abuse Therapy', 'Trauma Therapy', 'Cognitive Behavioral Therapy (CBT)','Dialectical Behavior Therapy (DBT)', 'Family Systems Therapy', 'Play Therapy']),
            'experience' => fake()->sentence(),
            'url' => fake()->imageUrl(),
            'from' => fake()->date(),
            'to' => fake()->date(),
            'issuer' => fake()->company(),
            'issuer_address' => fake()->address(),
        ];
    }
}
