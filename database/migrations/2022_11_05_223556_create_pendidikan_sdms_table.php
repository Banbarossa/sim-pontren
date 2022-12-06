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
        Schema::create('pendidikan_sdms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sdm_id')->constrained()->cascadeOnDelete();
            $table->string('jenjang');
            $table->string('nama_lembaga');
            $table->string('jurusan')->nullable();
            $table->string('tahun_masuk')->nullable();
            $table->string('lulus')->nullable();
            $table->integer('ipk')->nullable();
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
        Schema::dropIfExists('pendidikan_sdms');
    }
};
