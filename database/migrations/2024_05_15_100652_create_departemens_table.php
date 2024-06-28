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
        Schema::create('departemens', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama_departemen');
            $table->foreignId('kepala_departemen')
                ->constrained()->references('id')->on('penguruses')
                ->cascadeOnUpdate();
            $table->foreignId('bidang_id')->constrained()->cascadeOnUpdate();
            $table->text('detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departemens');
    }
};
