<?php

namespace Database\Seeders;

use App\Models\Plan;
use Database\Factories\PlanFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Plan::factory(5)->create(new Sequence(
            [
                'name' => 'Individual Therapy (Psychotherapy)',
                'num_sessions' => 10,
                'description' => fake()->sentence(), 
                'price' => 8000
            ],
            [
                'name' => 'Individual Therapy (Psychotherapy)',
                'num_sessions' => 16, 
                'description' => fake()->sentence(),
                'price' => 10000
            ]
        ));
    }
}
