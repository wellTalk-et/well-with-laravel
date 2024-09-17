<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Doctor;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consultation>
 */
class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'client_id' => Client::factory(),
                'doctor_id' => Doctor::factory(),
                'plan_id' => Plan::factory(),
                'consultation_date' => fake()->dateTimeBetween('now', '+1 month'),
        ];
            //
    }
}
