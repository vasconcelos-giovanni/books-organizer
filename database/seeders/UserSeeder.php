<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = [
            'name' => 'Admin',
            'email' => 'giovannivmedeiros@gmail.com',
            'password' => Hash::make('Laravel098')
        ];

        User::Factory()
            ->count(1)
            ->state(new Sequence($adminUser))
            ->create();
    }
}
