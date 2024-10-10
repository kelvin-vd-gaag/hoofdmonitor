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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable()->constrained()->onDelete('set null'); // De gebruiker die de actie uitvoerde
            $table->string('model_type')->nullable(); // Bijvoorbeeld 'Task', 'User', etc.
            $table->unsignedBigInteger('model_id')->nullable(); // Het ID van het gerelateerde model (bv. taak_id of user_id)
            $table->string('action'); // Beschrijft de uitgevoerde actie ('claimed', 'unclaimed', 'created', etc.)
            $table->longText('description')->nullable(); // Optioneel een beschrijving van de actie
            $table->json('changes')->nullable(); // Eventuele veranderingen (bijvoorbeeld voor bijwerken)
            $table->timestamp('action_time')->useCurrent(); // Tijdstip van de actie
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
