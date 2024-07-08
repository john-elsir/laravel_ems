<?php

use App\Models\ClinicRecord;
use App\Models\Finding;
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
        Schema::create('clinic_record_finding', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Finding::class)->constrained()->cancelOnDelete();
            $table->foreignIdFor(ClinicRecord::class)->constrained()->cancelOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinic_record_finding');
    }
};
