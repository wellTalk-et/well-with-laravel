<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->id();
        // $table->dateTime('appointment_datetime')->default('now');
        // $table->string('title')->nullable();
        // $table->string('note')->nullable();
        // $table->foreignIdFor(Client::class)->constrained()->cascadeOnDelete();
        // $table->foreignIdFor(Doctor::class)->constrained()->cascadeOnDelete();
        // $table->timestamps();
        return [
            'appointment_datetime' => fake()->dateTimeBetween('now', '+4 hours'),
            'title' => fake()->sentence(),
            'note' => fake()->paragraph(), 
            'client_id' => Client::factory(),
            'doctor_id' => Doctor::factory()
        ];
    }
}
