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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('fb')->default('#');
            $table->string('twt')->default('#');
            $table->string('ig')->default('#');
            $table->string('google')->default('#');
            $table->string('linked')->default('#');
            $table->string('yt')->default('#');
            $table->string('site_title')->default('SMK Wikrama Bogor');
            $table->string('longitude_latitude')->default('#');
            $table->string('address')->default('#');
            $table->string('telp')->default('#');
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
        Schema::dropIfExists('settings');
    }
};
