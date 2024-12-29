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
        Schema::create('matches_equipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained('matches')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('equipe_id')->constrained('equipes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('score_equipe')->nullable();
            $table->enum('resultat', ['victoire', 'defaite', 'match nul'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches_equipes');
    }
};
