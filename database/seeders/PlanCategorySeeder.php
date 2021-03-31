<?php

namespace Database\Seeders;

use App\Models\PlanCategory;
use Illuminate\Database\Seeder;

class PlanCategorySeeder extends Seeder
{
    public function run()
    {
        PlanCategory::create([ 
            'title' => 'Spanish',
            'slug' => 'spanish',
        ]);
        PlanCategory::create([ 
            'title' => 'Classical',
            'slug' => 'classical',
        ]);
        PlanCategory::create([ 
            'title' => 'Traditional',
            'slug' => 'traditional',
        ]);
        PlanCategory::create([ 
            'title' => 'Contemporary',
            'slug' => 'contemporary',
        ]);
    }
}
