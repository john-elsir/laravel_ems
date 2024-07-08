<?php

use App\Models\Employee;
use App\Models\Physician;
use App\Models\User;
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
        Schema::create('clinic_records', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Employee::class);
            $table->foreignIdFor(Physician::class);
            $table->string('chief_complaints');
            $table->string('interventions');
            $table->float('temperature');
            $table->integer('systolic');
            $table->integer('diastolic');
            $table->string('medical_history')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinic_records');
    }
};
