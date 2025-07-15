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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->json('description');
            $table->json('address');
            $table->string('map', length: 500)->nullable();
            $table->string('map_embed', length: 500)->nullable();
            $table->string('cv', length: 100)->nullable();
            $table->string('renacyt')->nullable();
            $table->string('facebook')->nullable();
            $table->string('x')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
