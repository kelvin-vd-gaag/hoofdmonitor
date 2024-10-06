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
        Schema::create('employee_task', function (Blueprint $table) {
            $table->id();

            // Foreign key to employees table
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');

            // Foreign key to tasks table
            $table->foreignId('task_id')->constrained()->onDelete('cascade');
            $table->integer('assigned_hours');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_task');
    }
};
