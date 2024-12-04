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
        Schema::create('utilisation', function (Blueprint $table) {
            $table->foreign('matricule')->references('matricule')->on('Voitures');
            $table->foreign('codeSal')->references('codeSal')->on('Voitures');
            $table->date('dateDébutUtilisation');
            $table->date('dateFinUtilisation');
            $table->timestamps();
            $table->primary(['matricule','codeSal','dateDébutUtilisation']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisation');
    }
};
