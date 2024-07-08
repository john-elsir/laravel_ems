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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('address');
            $table->string('contact');
            $table->string('occupation');
            $table->string('nationality');
            $table->string('project_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
