<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {            
        $plan = Plan::factory()->create();
        return [
            'client_id' => Client::factory(),
            'plan_id' => $plan->id,
            'amount' => $plan->price,
            'paid_with' => 'chapa'
        ];
    }
}
