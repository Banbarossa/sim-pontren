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
        Schema::create('inventory_mantenances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained();
            $table->text('deskripsi_kerusakan')->nullable();
            $table->string('pemeriksa')->nullable();
            $table->text('analisa_biaya')->nullable();
            $table->boolean('status_periksa')->default(0);
            $table->integer('approval')->nullable();
            $table->string('approved_oleh')->nullable();
            $table->integer('biaya_perbaikan');
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
        Schema::dropIfExists('inventory_mantenances');
    }
};
