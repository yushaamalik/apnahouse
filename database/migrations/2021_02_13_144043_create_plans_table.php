<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('width')->nullable();
            $table->string('depth')->nullable();
            $table->string('height')->nullable();
            $table->string('storeys')->nullable();
            $table->string('total_covered_area')->nullable();
            $table->string('area')->nullable();
            $table->string('car_porch')->nullable();
            $table->string('beds')->nullable();
            $table->string('drawing_rooms')->nullable();
            $table->string('lounges')->nullable();
            $table->string('dinning_areas')->nullable();
            $table->string('kitchens')->nullable();
            $table->string('s_kitchens')->nullable();
            $table->string('store_rooms')->nullable();
            $table->string('maid_rooms')->nullable();
            $table->string('laundary_rooms')->nullable();
            $table->string('terraces')->nullable();
            $table->string('rooftops')->nullable();
            $table->string('plan_summary')->nullable();
            $table->string('price')->nullable();
            $table->string('plan_description')->nullable();
            $table->string('plan_files')->nullable();
            $table->string('plan_name')->nullable();
            $table->string('plan_set_information')->nullable();
            $table->integer('corner_plot')->nullable();
            $table->integer('plan_status')->default(1);
            
            $table->integer('architect_id');
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
