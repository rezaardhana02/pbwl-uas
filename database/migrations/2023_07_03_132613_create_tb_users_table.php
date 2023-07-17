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
        Schema::create('tb_users', function (Blueprint $table) {
            $table->id('id');
            $table->string('email', 50);
            $table->string('password', 100);
            $table->string('nama', 100);
            $table->string('alamat');
            $table->string('hp', 25);
            $table->string('pos', 5)->nullable();
            $table->string('role', 2)->nullable();
            $table->string('aktif', 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_users');
    }
};
