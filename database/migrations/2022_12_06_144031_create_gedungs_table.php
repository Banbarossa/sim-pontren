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
        Schema::create('gedungs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('jumlah_lantai')->default(1);
            $table->string('kepemilikan')->default('Milik Sendiri');
            $table->string('kerusakan')->nullable();
            $table->string('tahun_dibangun')->nullable();
            $table->string('luas')->nullable();
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
        Schema::dropIfExists('gedungs');
    }
};
