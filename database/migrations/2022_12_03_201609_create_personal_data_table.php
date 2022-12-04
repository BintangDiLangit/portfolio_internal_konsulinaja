<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('personal_data', function ($table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('introduction')->nullable();
            $table->string('photo')->nullable();
            $table->string('job')->nullable();
            $table->integer('years_experience')->nullable();
            $table->integer('happy_clients')->nullable();
            $table->integer('winning_competitions')->nullable();
            $table->integer('project_done')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('personal_data');
    }
}