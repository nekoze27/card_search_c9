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
        Schema::create('card_contents', function (Blueprint $table) {
            $table->id('card_contents_id');
            $table->string('card_no');
            $table->string('name');
            $table->string('category');
            $table->integer('hp')->nullable();
            $table->string('weakness')->nullable();
            $table->string('resistance')->nullable();
            $table->integer('escape_energy')->nullable();
            $table->string('effect')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_contents');
    }
};
