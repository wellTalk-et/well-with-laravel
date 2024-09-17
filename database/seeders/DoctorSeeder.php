<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'first_name' => 'abel',
            'last_name' => 'asmare',
            'username' => env('DOCTOR_DEFAULT_USERNAME'), // change this 
            'email' => env('DOCTOR_DEFAULT_EMAIL'), // change this
            'password' => Hash::make(env('DOCTOR_DEFAULT_PASSWORD')), // also change this
            'email_verified_at' => now(),
            'country' => 'Ethiopia', 
            'remember_token' => Str::random(10),
        ]);
        $user->Doctor()->create([]);
    }
}
