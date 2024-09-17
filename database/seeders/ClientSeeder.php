<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::factory()->create([
            'first_name' => 'abey',
            'last_name' => 'asmare',
            'username' => env('CLIENT_DEFAULT_USERNAME'), // change this 
            'email' => env('CLIENT_DEFAULT_EMAIL'), // change this
            'password' => Hash::make(env('CLIENT_DEFAULT_PASSWORD')), // also change this
            'email_verified_at' => now(),
            'country' => 'Ethiopia', 
            'remember_token' => Str::random(10),
        ]);
        $client = $user->client()->create();

    }
}
