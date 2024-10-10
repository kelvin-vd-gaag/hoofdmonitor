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
        Schema::create('milestones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained()->onDelete('cascade'); // Verwijzing naar de tasks tabel
            $table->string('name'); // Naam van de mini-deadline (bijvoorbeeld "Inventarisatie")
            $table->text('description')->nullable(); // Optionele omschrijving
            $table->integer('hours'); // Aantal uren voor de mini-deadline
            $table->date('deadline'); // De deadline voor deze mini-deadline
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milestones');
    }
};
