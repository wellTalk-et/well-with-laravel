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
            'username' => 'abey_avi',
            'email' => 'abeyasmare07@gmail.com',
            'email_verified_at' => now(),
            'country' => 'Ethiopia', 
            'password' => Hash::make('Abey@1234'),
            'remember_token' => Str::random(10),
        ]);
        $user->client()->create();
    }
}
