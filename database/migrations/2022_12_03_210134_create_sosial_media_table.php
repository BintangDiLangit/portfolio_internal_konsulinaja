<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSosialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('sosial_media', function ($table) {
            $table->id();
            $table->integer('user_id');
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('dribble')->nullable();
            $table->string('medium')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('github')->nullable();
            $table->string('gitlab')->nullable();
            $table->string('bitbucket')->nullable();
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
        Schema::connection('mysql2')->dropIfExists('sosial_media');
    }
}