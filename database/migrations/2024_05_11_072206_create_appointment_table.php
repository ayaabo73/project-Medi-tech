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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctorID')->constrained('doctors')->onDelete('cascade');
            $table->foreignId('sectionID')->constrained('sections')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->enum('type',['Appointment','Confirmed Appointment','Expired Appointment'])->default('Appointment');
            $table->dateTime('appointment')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
