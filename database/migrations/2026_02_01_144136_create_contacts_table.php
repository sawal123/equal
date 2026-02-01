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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan');
            $table->text('alamat')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->text('google_maps')->nullable(); // link embed / share
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
