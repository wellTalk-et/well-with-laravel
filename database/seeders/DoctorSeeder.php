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
            'username' => 'abel_abel',
            'email' => 'abey0102@gmail.com',
            'email_verified_at' => now(),
            'country' => 'Ethiopia', 
            'password' => Hash::make('Abey@1234'),
            'remember_token' => Str::random(10),
        ]);
        $user->Doctor()->create([]);
    }
}
