<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchitectProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('architect_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('architect_id');
            $table->string('company_name');
            $table->string('location'); 
            $table->string('company_exp'); 
            $table->integer('company_incorp'); 
            $table->string('address'); 
            $table->string('website');
            $table->string('logo'); 
            $table->string('description'); 
            $table->integer('status')->default(0);

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
        Schema::dropIfExists('architect_profiles');
    }
}
