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
        Schema::create('virtual_wikramas', function (Blueprint $table) {
            $table->id();
            $table->string('ecommerce');
            $table->string('elearning');
            $table->string('mini_movie');
            $table->string('live_meeting');
            $table->string('perpus');
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
        Schema::dropIfExists('virtual_wikramas');
    }
};
