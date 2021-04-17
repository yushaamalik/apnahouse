<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Architect;
use App\Models\PlanCategory;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    public function run()
    {
        $architect = Architect::pluck('id');
        $PlanCategory = PlanCategory::pluck('id');

        foreach ($PlanCategory as $P) {
            Plan::factory(9)->create([
                'plan_category_id' => $P,
                'architect_id' => $architect->random(),
            ]);
        }
    }
}
