<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->integer('architect_id');
            $table->integer('width');
            $table->integer('depth');
            $table->integer('height');
            $table->integer('storeys');
            $table->integer('total_covered_area');
            $table->integer('area');
            $table->integer('car_porch');
            $table->integer('beds');
            $table->integer('drawing_rooms');
            $table->integer('lounges');
            $table->integer('dinning_areas');
            $table->integer('kitchens');
            $table->integer('s_kitchens');
            $table->integer('store_rooms');
            $table->integer('maid_rooms');
            $table->integer('laundary_rooms');
            $table->integer('terraces');
            $table->integer('rooftops');
            $table->integer('corner_plot');
            $table->string('plan_summary');
            $table->string('plan_description');
            $table->string('plan_files');
            $table->integer('plan_status')->default(1);
            $table->string('plan_name');
            $table->string('plan_set_information');








            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
