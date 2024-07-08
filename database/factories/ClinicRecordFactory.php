<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Physician;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClinicRecord>
 */
class ClinicRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => Employee::factory(),
            'employee_id' => Employee::factory(),
            'physician_id' => Physician::factory(),
            'chief_complaints' => fake()->sentence,
            'interventions' => fake()->sentence,
            'temperature' => fake()->randomFloat(2, 35, 36),
            'systolic' => 120,
            'diastolic' => 80,
            'medical_history' => fake()->sentence,
            'note' => fake()->sentence,
        ];
    }
}
