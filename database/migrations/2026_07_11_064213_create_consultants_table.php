<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This creates the "consultants" table in the database.
     */
    public function up(): void
    {
        Schema::create('consultants', function (Blueprint $table) {
          

            // Left column of the form
            $table->string('doctorId')->primary();   // auto-increment primary key   
            $table->string('name');                          
            $table->string('costCentre')->nullable();
            $table->text('address')->nullable();
            $table->string('qualification')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('contactNo')->nullable();        
            $table->string('email')->nullable();
            $table->text('remarks')->nullable();
            $table->string('freeDaysCash')->nullable();
            $table->string('freeDaysCredit')->nullable();
            $table->boolean('showInAppointment')->default(true);
            $table->boolean('showInRegistration')->default(false);

            // Right column of the form
            $table->string('userCode')->nullable();          
            $table->string('licenseNo')->nullable();
            $table->string('regNo')->nullable();
            $table->string('idCardNo')->nullable();
            $table->string('idType')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('sortOrder')->nullable();
            $table->string('scheduleInterval')->nullable();
            $table->string('roomNo')->nullable();
            $table->integer('freeVisits')->nullable();
            $table->decimal('defaultRate', 10, 2)->nullable();
            $table->decimal('minDescPercent', 5, 2)->nullable();
            $table->decimal('minDescAmt', 10, 2)->nullable();
            $table->decimal('maxDescPercent', 5, 2)->nullable();
            $table->decimal('maxDescAmt', 10, 2)->nullable();
            $table->string('speciality')->nullable();
            $table->string('consultantType')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultants');
    }
};