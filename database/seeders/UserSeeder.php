<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Architect;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        Admin::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
        
        Architect::create([
            'name' => 'architect',
            'email' => 'architect@architect.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }
}
