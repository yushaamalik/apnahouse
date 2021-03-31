<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModificationsTable extends Migration
{
    public function up()
    {
        Schema::create('modifications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('status')->default(0);
            
            $table->foreignId('architect_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('plan_id')->nullable();
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
        Schema::dropIfExists('modification_requests');
    }
}
