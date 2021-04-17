<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Plan::class;

    /**
     * Define the model's default state.
     */
    public function definition()
    {
        return [
            'width' => $this->faker->randomDigit,
            'depth' => $this->faker->randomDigit,
            'height' => $this->faker->randomDigit,
            'storeys' => $this->faker->randomDigit,
            'total_covered_area' => $this->faker->randomDigit,
            'area' => $this->faker->randomDigit,
            'car_porch' => $this->faker->randomDigit,
            'beds' => $this->faker->randomDigit,
            'drawing_rooms' => $this->faker->randomDigit,
            'lounges' => $this->faker->randomDigit,
            'dinning_areas' => $this->faker->randomDigit,
            'kitchens' => $this->faker->randomDigit,
            's_kitchens' => $this->faker->randomDigit,
            'store_rooms' => $this->faker->randomDigit,
            'maid_rooms' => $this->faker->randomDigit,
            'laundary_rooms' => $this->faker->randomDigit,
            'terraces' => $this->faker->randomDigit,
            'rooftops' => $this->faker->randomDigit,
            'price' => rand(5000, 50000),
            'plan_name' => $this->faker->catchPhrase,
            'plan_description' => $this->faker->realText(80),
            'plan_summary' => $this->faker->realText(80),
            'plan_set_information' => $this->faker->realText(80),
            'plan_files' => '1.jpg',
            'corner_plot' => rand(0, 1),
            'plan_status' => 0,
        ];
    }
}
