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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_image')->nullable()->references('id')->on('images')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreignId('id_text')->nullable()->references('id')->on('texts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
