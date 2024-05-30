<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengelola_profil', function (Blueprint $table) {
            $table->id('id_pengelolaprofil');
            $table->unsignedBigInteger('fk_id_user');
            $table->timestamps();

            $table->foreign('fk_id_user')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengelola_profil');
    }
};