<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('win')->default(0);
            $table->integer('lost')->default(0);
            $table->integer('draws')->default(0);
            $table->integer('goals')->default(0);
            $table->integer('goal_difference')->default(0);
            $table->integer('goal_conceded')->default(0);
            $table->integer('goal_scored')->default(0);
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
        Schema::dropIfExists('teams');
    }
};
