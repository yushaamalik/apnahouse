<?php

namespace Database\Seeders;

use App\Models\Architect;
use Illuminate\Database\Seeder;

class ArchitectSeeder extends Seeder
{
    public function run()
    {
        Architect::create([
            'name' => 'architect1',
            'email' => 'architect1@architect.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
        Architect::create([
            'name' => 'architect2',
            'email' => 'architect2@architect.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
        Architect::create([
            'name' => 'architect3',
            'email' => 'architect3@architect.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }
}
