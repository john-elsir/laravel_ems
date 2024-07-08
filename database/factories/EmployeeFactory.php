<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nationality = ['Pilipino', 'Indian', 'Pakisatani', 'Nepali', 'Baladeshi'];
        $civil_status = ['Single', 'Married'];
        $project_location = ['030', '075', '073'];

        return [
            'emp_id' => fake()->numberBetween(100000, 999999),
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'gender' => 'male',
            'civil_status' => fake()->randomElement($civil_status),
            'address' => fake()->address,
            'contact' => fake()->phoneNumber,
            'occupation' => fake()->jobTitle,
            'nationality' => fake()->randomElement($nationality),
            'project_location' => fake()->randomElement($project_location),
        ];
    }
}
