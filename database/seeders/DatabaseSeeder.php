<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PlanCategorySeeder::class);
        $this->call(ArchitectSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(ModificationSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
