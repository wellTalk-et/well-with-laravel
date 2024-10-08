<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Test User',
            'last_name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(ClientSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(AppointmentSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(PlanSeeder::class);
    }
}
