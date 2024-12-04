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
        Schema::create('salariés', function (Blueprint $table) {
            $table->integer('codeSal')->primary();
            $table->string('nomSal');
            $table->string('prenomSal');
            $table->date('dateEmbauche');
            $table->date('dateNaissance');
            $table->string('fonction');
            $table->foreign('codeSer')->references('codeSer')->on('Services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salariés');
    }
};
