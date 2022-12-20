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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->foreignId('inventory_category_id')->constrained();
            $table->foreignId('ruang_id')->constrained();
            $table->string('merek')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('kondisi')->nullable();
            $table->date('tanggal_pengadaan')->nullable();
            $table->foreignId('danainventory_id')->constrained();
            $table->string('sumber_perolehan')->nullable();
            $table->integer('harga_perolehan')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('satuan')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('inventories');
    }
};
