<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text' => fake()->randomElement(['Are you currently experiencing any health issues?', 'Have you ever been diagnosed with a chronic condition?', 'Have you visited a doctor in the last six months?', 'Do you have health insurance?', 'Are you taking any prescription medications?']),
            'type' => 'yes_no',
        ];
    }
}
